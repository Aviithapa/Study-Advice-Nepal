@extends('portal.components.layout', ['title' => 'Site Setting'])

@section('main-content')
    <form class="grid grid-cols-12 gap-3 needs-validation custom-input" action="{{ route('setting.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        @foreach ($settings as $key => $setting)
            <div class="mb-3 col-span-6">
                <label class="form-label">{{ $setting->display_name }}</label>
                @if ($key === 'logo_image')
                    <input type="file" name="logo_image" class="form-control">
                    @if ($setting->value)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $setting->value) }}" alt="Logo" height="50"
                                width="100">
                        </div>
                    @endif
                @elseif($setting->type === 'textarea')
                    <textarea name="{{ $key }}" class="form-control">{{ $setting->value }}</textarea>
                @else
                    <input type="text" name="{{ $key }}" class="form-control" value="{{ $setting->value }}">
                @endif
            </div>
        @endforeach

        <div class="col-span-12 flex justify-end">
            <button type="submit" class="btn btn-primary text-white">
                Save Changes
            </button>
        </div>

    </form>
@endsection
