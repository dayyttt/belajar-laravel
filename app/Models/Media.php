<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'original_name',
        'file_path',
        'file_size',
        'mime_type',
        'extension',
        'title',
        'description',
        'alt_text',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the media.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the media's file URL.
     */
    protected function fileUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => 
                $attributes['file_path'] 
                    ? asset('storage/' . $attributes['file_path']) 
                    : null
        );
    }

    /**
     * Get the media's thumbnail URL (for images).
     */
    protected function thumbnailUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => 
                $this->isImage() 
                    ? asset('storage/' . $attributes['file_path']) 
                    : $this->getFileIcon()
        );
    }

    /**
     * Check if media is an image.
     */
    public function isImage(): bool
    {
        return str_starts_with($this->mime_type, 'image/');
    }

    /**
     * Check if media is a video.
     */
    public function isVideo(): bool
    {
        return str_starts_with($this->mime_type, 'video/');
    }

    /**
     * Check if media is an audio file.
     */
    public function isAudio(): bool
    {
        return str_starts_with($this->mime_type, 'audio/');
    }

    /**
     * Check if media is a document.
     */
    public function isDocument(): bool
    {
        return in_array($this->mime_type, [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ]);
    }

    /**
     * Get file type category.
     */
    public function getFileType(): string
    {
        if ($this->isImage()) return 'image';
        if ($this->isVideo()) return 'video';
        if ($this->isAudio()) return 'audio';
        if ($this->isDocument()) return 'document';
        return 'other';
    }

    /**
     * Get file icon based on type.
     */
    public function getFileIcon(): string
    {
        return match($this->getFileType()) {
            'image' => 'fas fa-image',
            'video' => 'fas fa-video',
            'audio' => 'fas fa-music',
            'document' => 'fas fa-file-alt',
            'pdf' => 'fas fa-file-pdf',
            default => 'fas fa-file'
        };
    }

    /**
     * Get formatted file size.
     */
    public function getFormattedSize(): string
    {
        $bytes = $this->file_size;
        
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }

    /**
     * Get human readable file type.
     */
    public function getHumanReadableType(): string
    {
        return match($this->getFileType()) {
            'image' => 'Gambar',
            'video' => 'Video',
            'audio' => 'Audio',
            'document' => 'Dokumen',
            'pdf' => 'PDF',
            default => 'File'
        };
    }
}