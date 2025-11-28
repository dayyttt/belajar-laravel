<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::with('user')
            ->latest()
            ->paginate(20);
            
        return view('admin.pages.manajemen.media.index', compact('media'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,webp,svg,pdf,doc,docx,xls,xlsx,mp4,avi,mov,mp3,wav|max:10240', // 10MB max
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $uploadedFiles = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $originalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                $uniqueName = Str::slug($fileName) . '-' . uniqid() . '.' . $extension;
                
                $filePath = $file->storeAs('media', $uniqueName, 'public');
                
                $media = Media::create([
                    'file_name' => $uniqueName,
                    'original_name' => $originalName,
                    'file_path' => $filePath,
                    'file_size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                    'extension' => $extension,
                    'title' => $request->title ?: $fileName,
                    'description' => $request->description,
                    'user_id' => auth()->id(),
                ]);

                $uploadedFiles[] = $media;
            }
        }

        return redirect()->route('admin.pages.manajemen.media.index')
            ->with('success', count($uploadedFiles) . ' file berhasil diupload!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $media->update($request->only(['title', 'description', 'alt_text']));

        return redirect()->route('admin.pages.manajemen.media.index')
            ->with('success', 'Media berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        // Delete physical file
        Storage::disk('public')->delete($media->file_path);
        
        $media->delete();

        return redirect()->route('admin.pages.manajemen.media.index')
            ->with('success', 'Media berhasil dihapus!');
    }

    /**
     * Bulk delete media
     */
    public function bulkDestroy(Request $request)
    {
        $request->validate([
            'selected_media' => 'required|array',
            'selected_media.*' => 'exists:media,id'
        ]);

        $deletedCount = 0;

        foreach ($request->selected_media as $mediaId) {
            $media = Media::find($mediaId);
            if ($media) {
                Storage::disk('public')->delete($media->file_path);
                $media->delete();
                $deletedCount++;
            }
        }

        return redirect()->route('admin.pages.manajemen.media.index')
            ->with('success', $deletedCount . ' media berhasil dihapus!');
    }

    /**
     * Get file type
     */
    private function getFileType($mimeType)
    {
        if (Str::startsWith($mimeType, 'image/')) {
            return 'image';
        } elseif (Str::startsWith($mimeType, 'video/')) {
            return 'video';
        } elseif (Str::startsWith($mimeType, 'audio/')) {
            return 'audio';
        } elseif ($mimeType === 'application/pdf') {
            return 'pdf';
        } elseif (in_array($mimeType, [
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ])) {
            return 'document';
        } else {
            return 'other';
        }
    }
}