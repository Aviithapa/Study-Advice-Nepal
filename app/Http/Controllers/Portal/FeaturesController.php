<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class FeaturesController extends PortalBaseController
{
    /**
     * Display a listing of features with type POST.
     */
    public function index()
    {
        $features = Post::where('type', PostTypeEnum::FEATURE->value)->latest()->paginate(15);
        return $this->view('features.index', compact('features'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('features.create');
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
            'type' => PostTypeEnum::FEATURE->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('feature_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('feature_image');
        }

        // Clear cache if needed
        Cache::forget('features_list');

        return redirect()->route('features.index')->with('success', 'feature created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $feature = Post::where('type', PostTypeEnum::FEATURE->value)->findOrFail($id);
        return $this->view('features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $feature = Post::where('type', PostTypeEnum::FEATURE->value)->findOrFail($id);
        return $this->view('features.edit', compact('feature'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $feature = Post::where('type', PostTypeEnum::FEATURE->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $feature->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $feature->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $feature->clearMediaCollection('feature_image');
            $feature->addMediaFromRequest('image')->toMediaCollection('feature_image');
        }

        Cache::forget('features_list');

        return redirect()->route('features.index')->with('success', 'feature updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::FEATURE->value)->findOrFail($id);
        $post->delete();

        Cache::forget('features_list');

        return redirect()->route('features.index')->with('success', 'feature deleted successfully.');
    }
}
