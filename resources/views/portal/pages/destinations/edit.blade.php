@extends('portal.components.layout', ['title' => 'Edit Destination'])

@section('main-content')
    @include('portal.pages.destinations.form', ['data' => $destination])
@endsection
