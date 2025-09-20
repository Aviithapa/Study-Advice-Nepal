<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class BlogController extends PortalBaseController
{
    /**
     * Display a listing of blogs with type POST.
     */
    public function index()
    {
        $blogs = Post::where('type', PostTypeEnum::BLOG->value)->latest()->paginate(15);
        return $this->view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('blogs.create');
    }

    /**
     * Store a newly created post in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'type' => PostTypeEnum::BLOG->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('blog_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('blog_image');
        }

        // Clear cache if needed
        Cache::forget('blogs_list');

        return redirect()->route('blogs.index')->with('success', 'blog created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $blog = Post::where('type', PostTypeEnum::BLOG->value)->findOrFail($id);
        return $this->view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $blog = Post::where('type', PostTypeEnum::BLOG->value)->findOrFail($id);
        return $this->view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Post::where('type', PostTypeEnum::BLOG->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $blog->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $blog->clearMediaCollection('blog_image');
            $blog->addMediaFromRequest('image')->toMediaCollection('blog_image');
        }

        Cache::forget('blogs_list');

        return redirect()->route('blogs.index')->with('success', 'blog updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::BLOG->value)->findOrFail($id);
        $post->delete();

        Cache::forget('blogs_list');

        return redirect()->route('blogs.index')->with('success', 'blog deleted successfully.');
    }
}
