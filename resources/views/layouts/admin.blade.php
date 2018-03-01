<!DOCTYPE html>
<html>
    <head>
        <title>Red Diamond Coatins - @yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- This is the main navbar --}}
        @include('includes.adminnavbar')

        {{-- Page content --}}
        <div>
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/dbedit.js') }}"></script>
    </body>
</html>
