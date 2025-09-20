@extends('portal.layout.app')

@section('content')
    <div class="container w-full">
        @include('portal.components.breadcrumb', ['title' => $title])


        <div class="container-fluid">
            <div class="grid grid-cols-12 card-gap">
                <div class="col-span-12">
                    <div class="card">
                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @yield('main-content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
