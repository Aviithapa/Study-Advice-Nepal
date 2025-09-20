@extends('portal.components.layout', ['title' => 'Banner'])

@section('main-content')
    <form class="grid grid-cols-12 gap-3" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="col-span-6 md:col-span-12">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $banner->title ?? '') }}" required>
            @error('title')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-span-6 md:col-span-12">
            <label class="form-label">Content</label>
            <input type="text" name="content" class="form-control" value="{{ old('content', $banner->content ?? '') }}">
            @error('content')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-span-12 md:col-span-12">
            <label class="form-label">Headline</label>
            <textarea name="excerpt" class="form-control" rows="3" placeholder="Write HTML like: <span>Study Of </span> ...">{{ old('excerpt', $banner->excerpt ?? '') }}</textarea>
            @error('excerpt')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>



        <div class="col-span-6 md:col-span-12">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" {{ isset($banner) ? '' : 'required' }}>
            @error('image')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror

            @if (isset($banner) && $banner->hasMedia('banner_image'))
                <div class="mt-2">
                    <img src="{{ $banner->getFirstMediaUrl('banner_image') }}" alt="Banner Image"
                        class="w-full h-40 object-cover">
                </div>
            @endif
            <span>Note: Image Size -> 1920 * 865</span>
        </div>

        <div class="col-span-12 flex justify-end">
            <button type="submit" class="btn btn-primary text-white">
                Save Banner
            </button>
        </div>
    </form>
@endsection
