@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">@yield('title')</h1>
            @yield('page')
        </div>
    </div>
@endsection
