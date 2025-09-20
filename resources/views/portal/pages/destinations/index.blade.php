@extends('portal.layout.app')

@section('content')
    <div class="container w-full">
        @include('portal.components.breadcrumb', ['title' => 'Destination'])

        <div class="container-fluid">
            <div class="grid grid-cols-12 card-gap">
                <div class="col-span-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-end">
                                <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3 text-white">Create
                                    New
                                    Destination</a>
                            </div>

                        </div>
                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if ($destinations->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Excerpt</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($destinations as $post)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->slug }}</td>
                                                <td>{{ $post->excerpt }}</td>
                                                <td>
                                                    <a href="{{ route('destinations.edit', $post->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('destinations.destroy', $post->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $destinations->links() }}
                            @else
                                <p>No destination found.</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
