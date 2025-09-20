<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class TestimonialsController extends PortalBaseController
{
    /**
     * Display a listing of testimonials with type POST.
     */
    public function index()
    {
        $testimonials = Post::where('type', PostTypeEnum::TESTIMONIAL->value)->latest()->paginate(15);
        return $this->view('testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('testimonials.create');
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
            'type' => PostTypeEnum::TESTIMONIAL->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('testimonial_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('testimonial_image');
        }

        // Clear cache if needed
        Cache::forget('testimonials_list');

        return redirect()->route('testimonials.index')->with('success', 'testimonial created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $testimonial = Post::where('type', PostTypeEnum::TESTIMONIAL->value)->findOrFail($id);
        return $this->view('testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $testimonial = Post::where('type', PostTypeEnum::TESTIMONIAL->value)->findOrFail($id);
        return $this->view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Post::where('type', PostTypeEnum::TESTIMONIAL->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $testimonial->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $testimonial->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $testimonial->clearMediaCollection('testimonial_image');
            $testimonial->addMediaFromRequest('image')->toMediaCollection('testimonial_image');
        }

        Cache::forget('testimonials_list');

        return redirect()->route('testimonials.index')->with('success', 'testimonial updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::TESTIMONIAL->value)->findOrFail($id);
        $post->delete();

        Cache::forget('testimonials_list');

        return redirect()->route('testimonials.index')->with('success', 'testimonial deleted successfully.');
    }
}
