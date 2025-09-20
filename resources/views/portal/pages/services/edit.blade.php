@extends('portal.components.layout', ['title' => 'Edit Service'])

@section('main-content')
    @include('portal.pages.services.form', ['data' => $service])
@endsection
