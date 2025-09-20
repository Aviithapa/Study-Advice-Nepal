<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BannerController extends PortalBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Post::where('type', PostTypeEnum::BANNER->value)->first();
        return $this->view('banner.index', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        // Get existing banner
        $banner = Post::where('type', PostTypeEnum::BANNER->value)->first();

        $banner = Post::updateOrCreate(
            ['type' => PostTypeEnum::BANNER->value],
            [
                'title' => $request->title,
                'content' => $request->content,
                'excerpt' => $request->excerpt,
                'slug' => Str::slug($request->title) . '-' . time(),
            ],
        );



        // Handle single image
        if ($request->hasFile('image')) {
            // Remove old image
            $banner->clearMediaCollection('banner_image');

            // Add new image
            $banner->addMediaFromRequest('image')->toMediaCollection('banner_image');
        }

        Cache::forget('page.banner');

        return redirect()->back()->with('success', 'Banner saved successfully!');
    }


}
