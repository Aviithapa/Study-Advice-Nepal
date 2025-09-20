@extends('portal.components.layout', ['title' => 'Edit Post'])

@section('main-content')
    @include('portal.pages.posts.form', ['data' => $post])
@endsection
