@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            @yield('form')
        </div>
    </div>
@endsection
