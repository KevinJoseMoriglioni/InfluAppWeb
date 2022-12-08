<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layoutComponents/head')
    <body>
        <header> @include('layoutComponents/navbarHeader') </header>

        <main> @yield('content') </main>

        <footer> @include('layoutComponents/navbarFooter') </footer>
    </body>
<script src="{{asset('js/app.js')}}" defer></script>
</html>