<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('Partials.head')
    @include('Partials.header')


    @yield('content')


    @include('Partials.footer')

</html>
