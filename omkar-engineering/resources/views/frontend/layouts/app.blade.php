<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- CSS -->

    @include('frontend.layouts.head')
</head>

<body>

    {{-- Preloader --}}
    @include('frontend.layouts.preloader')

    {{-- Header --}}
    @include('frontend.layouts.header')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    <!-- JS -->
    @include('frontend.layouts.scripts')

</body>
</html>