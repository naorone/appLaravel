<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('Partials.head')
    @include('Partials.header')

    <body>
    @yield('home')

    </body>
    @include('Partials.footer')
</html>
