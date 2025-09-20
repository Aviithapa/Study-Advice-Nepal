@php
    $isEdit = isset($data);
@endphp

<form class="grid grid-cols-12 gap-3"
    action="{{ $isEdit ? route('teams.update', ['team' => $data->id]) : route('teams.store') }}" method="POST"
    enctype="multipart/form-data">

    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif

    {{-- Title --}}
    <div class="col-span-6 md:col-span-12">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $data->title ?? '') }}" required>
        @error('title')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>

    {{-- Content --}}
    <div class="col-span-6 md:col-span-12">
        <label class="form-label">Tagline</label>
        <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $data->excerpt ?? '') }}">
        @error('excerpt')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-span-12 md:col-span-12">
        <label class="form-label">Content</label>
        <textarea id="content-editor" name="content" class="form-control" rows="10">{{ old('content', $data->content ?? '') }}</textarea>
        @error('content')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>


    {{-- Image --}}
    <div class="col-span-6 md:col-span-12">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control" {{ $isEdit ? '' : 'required' }}>
        @error('image')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror

        @if ($isEdit && $data->hasMedia('team_image'))
            <div class="mt-2">
                <img src="{{ $data->getFirstMediaUrl('team_image') }}" alt="data Image"
                    class="w-full h-40 object-cover">
            </div>
        @endif
    </div>

    {{-- Submit Button --}}
    <div class="col-span-12 flex justify-end">
        <button type="submit" class="btn btn-primary text-white">
            {{ $isEdit ? 'Update destination' : 'Save destination' }}
        </button>
    </div>
</form>
