<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class PageController extends PortalBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Post::where('type', PostTypeEnum::PAGE->value)->latest()->paginate(15);
        return $this->view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title',
            'content' => 'nullable|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
            'meta_description' => 'nullable|string',
            'cover' => 'nullable|image|max:2048',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'type' => PostTypeEnum::PAGE->value,
            'meta_description' => $request->meta_description,
        ]);

        if ($request->hasFile('image')) {
            $post->clearMediaCollection('page_image');
            $post->addMediaFromRequest('image')->toMediaCollection('page_image');
        }

        if ($request->hasFile('cover')) {
            $post->clearMediaCollection('page_cover');
            $post->addMediaFromRequest('cover')->toMediaCollection('page_cover');
        }

        // Clear cache if needed
        Cache::forget('page_list');

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Post::where('type', PostTypeEnum::PAGE->value)->findOrFail($id);
        return $this->view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Post::where('type', PostTypeEnum::PAGE->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $page->id,
            'content' => 'nullable|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
            'cover' => 'nullable|image|max:2048', // optional if updating
            'meta_description' => 'nullable|string',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'meta_description' => $request->meta_description,
        ]);

        if ($request->hasFile('image')) {
            $page->clearMediaCollection('page_image');
            $page->addMediaFromRequest('image')->toMediaCollection('page_image');
        }

        if ($request->hasFile('cover')) {
            $page->clearMediaCollection('page_cover');
            $page->addMediaFromRequest('cover')->toMediaCollection('page_cover');
        }

        Cache::forget('page_list');

        return redirect()->route('pages.index')->with('success', 'page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::PAGE->value)->findOrFail($id);
        $post->delete();

        Cache::forget('page_list');

        return redirect()->route('pages.index')->with('success', 'page deleted successfully.');
    }
}
