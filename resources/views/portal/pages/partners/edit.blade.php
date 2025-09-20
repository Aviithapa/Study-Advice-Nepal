@extends('portal.components.layout', ['title' => 'Edit Partner'])

@section('main-content')
    @include('portal.pages.partners.form', ['data' => $partner])
@endsection
