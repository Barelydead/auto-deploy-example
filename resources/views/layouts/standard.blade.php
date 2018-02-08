<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- This is the main navbar --}}
        @include('includes.navbar')

        {{-- flash area --}}
        @include('includes.flash')

<<<<<<< HEAD
        <div>
=======
        {{-- Page content --}}
        <div class="container">
>>>>>>> a4a81e531ab2bb210d0cf8683b40a0af7c0eace2
            @yield('content')
        </div>

        {{-- footer area  --}}
        @include('includes.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
