<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')

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