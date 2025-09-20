<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class PostController extends PortalBaseController
{
    /**
     * Display a listing of posts with type POST.
     */
    public function index()
    {
        $posts = Post::where('type', PostTypeEnum::POST->value)->latest()->paginate(15);
        return $this->view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('posts.create');
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
            'type' => PostTypeEnum::POST->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('post_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('post_image');
        }

        // Clear cache if needed
        Cache::forget('posts_list');

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $post = Post::where('type', PostTypeEnum::POST->value)->findOrFail($id);
        return $this->view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $post = Post::where('type', PostTypeEnum::POST->value)->findOrFail($id);
        return $this->view('posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::where('type', PostTypeEnum::POST->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $post->clearMediaCollection('post_image');
            $post->addMediaFromRequest('image')->toMediaCollection('post_image');
        }

        Cache::forget('posts_list');

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::POST->value)->findOrFail($id);
        $post->delete();

        Cache::forget('posts_list');

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
