@extends('portal.components.layout', ['title' => 'Edit testimonial'])

@section('main-content')
    @include('portal.pages.testimonials.form', ['data' => $testimonial])
@endsection
