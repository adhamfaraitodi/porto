<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('sections.head')
<body>
    @yield('content')
</body>
</html>
