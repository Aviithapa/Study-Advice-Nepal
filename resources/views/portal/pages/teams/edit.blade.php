@extends('portal.components.layout', ['title' => 'Edit Team'])

@section('main-content')
    @include('portal.pages.teams.form', ['data' => $team])
@endsection
