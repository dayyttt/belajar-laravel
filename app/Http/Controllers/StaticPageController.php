<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaticPageController extends Controller
{
    public function index()
    {
        $pages = StaticPage::latest()->get();
        return view('admin.pages.content.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.content.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        StaticPage::create($validated);

        return redirect()->route('admin.content.pages.index')
            ->with('success', 'Halaman berhasil ditambahkan');
    }

    public function show(StaticPage $page)
    {
        return view('admin.pages.content.pages.show', compact('page'));
    }

    public function edit(StaticPage $page)
    {
        return view('admin.pages.content.pages.edit', compact('page'));
    }

    public function update(Request $request, StaticPage $page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        $page->update($validated);

        return redirect()->route('admin.content.pages.index')
            ->with('success', 'Halaman berhasil diperbarui');
    }

    public function destroy(StaticPage $page)
    {
        $page->delete();
        return redirect()->route('admin.content.pages.index')
            ->with('success', 'Halaman berhasil dihapus');
    }
}