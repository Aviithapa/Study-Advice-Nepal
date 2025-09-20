@extends('portal.components.layout', ['title' => 'Edit Blogs'])

@section('main-content')
    @include('portal.pages.blogs.form', ['data' => $blog])
@endsection
