@extends('portal.components.layout', ['title' => 'Edit feature'])

@section('main-content')
    @include('portal.pages.features.form', ['data' => $feature])
@endsection
