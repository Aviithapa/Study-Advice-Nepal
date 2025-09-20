<?php

namespace App\Http\Controllers\Portal;

use App\Enums\PostTypeEnum;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class TeamsController extends PortalBaseController
{
    /**
     * Display a listing of teams with type POST.
     */
    public function index()
    {
        $teams = Post::where('type', PostTypeEnum::TEAM->value)->latest()->paginate(15);
        return $this->view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        return $this->view('teams.create');
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
            'type' => PostTypeEnum::TEAM->value,
        ]);

        if ($request->hasFile('image')) {
            // Remove old image
            $post->clearMediaCollection('team_image');

            // Add new image
            $post->addMediaFromRequest('image')->toMediaCollection('team_image');
        }

        // Clear cache if needed
        Cache::forget('teams_list');

        return redirect()->route('teams.index')->with('success', 'team created successfully.');
    }

    /**
     * Display the specified post.
     */
    public function show(string $id)
    {
        $team = Post::where('type', PostTypeEnum::TEAM->value)->findOrFail($id);
        return $this->view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(string $id)
    {
        $team = Post::where('type', PostTypeEnum::TEAM->value)->findOrFail($id);
        return $this->view('teams.edit', compact('team'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Post::where('type', PostTypeEnum::TEAM->value)->findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $team->id,
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|max:2048', // optional if updating
        ]);

        $team->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
        ]);

        if ($request->hasFile('image')) {
            $team->clearMediaCollection('team_image');
            $team->addMediaFromRequest('image')->toMediaCollection('team_image');
        }

        Cache::forget('teams_list');

        return redirect()->route('teams.index')->with('success', 'team updated successfully.');
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('type', PostTypeEnum::TEAM->value)->findOrFail($id);
        $post->delete();

        Cache::forget('teams_list');

        return redirect()->route('teams.index')->with('success', 'team deleted successfully.');
    }
}
