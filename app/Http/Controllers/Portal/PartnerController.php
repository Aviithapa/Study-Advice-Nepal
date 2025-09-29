<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class PartnerController extends PortalBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Post::where('type', PostTypeEnum::PARTNER->value)->latest()->paginate(15);
        return $this->view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
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
            'type' => PostTypeEnum::PARTNER->value,
        ]);

        if ($request->hasFile('image')) {
            $post->clearMediaCollection('partner_image');
            $post->addMediaFromRequest('image')->toMediaCollection('partner_image');
        }

        // Clear cache if needed
        Cache::forget('partners_list');

        return redirect()->route('partners.index')->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partner = Post::where('type', PostTypeEnum::PARTNER->value)->findOrFail($id);
        return $this->view('partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Post::where('type', PostTypeEnum::PARTNER->value)->findOrFail($id);
        return $this->view('partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $partner = Post::where('type', PostTypeEnum::PARTNER->value)->findOrFail($id);

            $request->validate([
                'title' => 'required|string|max:255|unique:posts,title,' . $partner->id,
                'content' => 'required|string',
                'excerpt' => 'nullable|string|max:500',
                'image' => 'nullable|image|max:2048', // optional if updating
            ]);

            $partner->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'excerpt' => $request->excerpt,
            ]);

            if ($request->hasFile('image')) {
                $partner->clearMediaCollection('partner_image');
                $partner->addMediaFromRequest('image')->toMediaCollection('partner_image');
            }

            Cache::forget('partners_list');
            return redirect()->route('partners.index')->with('success', 'Partners updated successfully.');
        } catch (Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::PARTNER->value)->findOrFail($id);
        $post->delete();

        Cache::forget('partners_list');

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
