<!DOCTYPE html>
<html>
    <head>
        <title>Red Diamond Coatins - @yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- This is the main navbar --}}
        @include('includes.navbar')

        {{-- flash area --}}
        @include('includes.flash')

        {{-- Page content --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- footer area  --}}
        @include('includes.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
