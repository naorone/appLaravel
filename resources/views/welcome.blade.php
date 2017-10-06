<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('Partials.head')
    @include('Partials.header')

    <body>
    @yield('home')


    @include('Partials.footer')
</html>
