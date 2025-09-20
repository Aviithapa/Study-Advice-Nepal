<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ServicesController extends PortalBaseController
{
    /**
     * Display a listing of services with type POST.
     */
    public function index()
    {
        $services = Post::where('type', PostTypeEnum::SERVICE->value)->latest()->paginate(15);
        return $this->view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('services.create');
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
            'type' => PostTypeEnum::SERVICE->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('service_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('service_image');
        }

        // Clear cache if needed
        Cache::forget('services_list');

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $service = Post::where('type', PostTypeEnum::SERVICE->value)->findOrFail($id);
        return $this->view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $service = Post::where('type', PostTypeEnum::SERVICE->value)->findOrFail($id);
        return $this->view('services.edit', compact('service'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Post::where('type', PostTypeEnum::SERVICE->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $service->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $service->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $service->clearMediaCollection('service_image');
            $service->addMediaFromRequest('image')->toMediaCollection('service_image');
        }

        Cache::forget('services_list');

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::SERVICE->value)->findOrFail($id);
        $post->delete();

        Cache::forget('services_list');

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
