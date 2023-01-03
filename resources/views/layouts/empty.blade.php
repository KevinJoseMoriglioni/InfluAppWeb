<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layoutComponents/head')
    <body>
        <main> @yield('content') </main>
    </body>
<script src="{{asset('js/app.js')}}" defer></script>
</html>