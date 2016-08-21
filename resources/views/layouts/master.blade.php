<!doctype html>
<!--[if lte IE 7]><html class="no-js lte-ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>@yield('title') :: eTrack</title>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>(function(d){d.className=d.className.replace(/^no-js\b/,'js');}(document.documentElement));</script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="navbar navbar-default navbar-static-top add-bottom-margin" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="{{ route('index') }}" class="navbar-brand">eTrack</a>
        </div>
        <nav role="navigation" class="collapse-navbar-collapse">
            <ul class="nav navbar-nav">
                @include('partials.nav')
            </ul>
        </nav>

        <div class="navbar-text pull-right">
            @if (Auth::check())
                <a href="{{ route('user.profile') }}">{{ Auth::user()->fullName }}</a>
                &bull;
                <a href="{{ route('auth.logout') }}">Logout</a>
            @endif
        </div>
    </div>
</header>

<section class="container-fluid">
    <main role="main">
        @include('flash::message')

        @yield('content')
    </main>

    <footer class="page-footer">
        Version 1.0
    </footer>
</section>

<script src="{{ asset('js/all.js') }}"></script>
</body>