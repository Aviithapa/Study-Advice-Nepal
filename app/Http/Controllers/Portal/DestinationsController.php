<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class DestinationsController extends PortalBaseController
{
    /**
     * Display a listing of destinations with type POST.
     */
    public function index()
    {
        $destinations = Post::where('type', PostTypeEnum::DESTINATION->value)->latest()->paginate(15);
        return $this->view('destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('destinations.create');
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
            'type' => PostTypeEnum::DESTINATION->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('destination_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('destination_image');
        }

        // Clear cache if needed
        Cache::forget('destinations_list');

        return redirect()->route('destinations.index')->with('success', 'destination created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $destination = Post::where('type', PostTypeEnum::DESTINATION->value)->findOrFail($id);
        return $this->view('destinations.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $destination = Post::where('type', PostTypeEnum::DESTINATION->value)->findOrFail($id);
        return $this->view('destinations.edit', compact('destination'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Post::where('type', PostTypeEnum::DESTINATION->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $destination->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $destination->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $destination->clearMediaCollection('destination_image');
            $destination->addMediaFromRequest('image')->toMediaCollection('destination_image');
        }

        Cache::forget('destinations_list');

        return redirect()->route('destinations.index')->with('success', 'destination updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::DESTINATION->value)->findOrFail($id);
        $post->delete();

        Cache::forget('destinations_list');

        return redirect()->route('destinations.index')->with('success', 'destination deleted successfully.');
    }
}
