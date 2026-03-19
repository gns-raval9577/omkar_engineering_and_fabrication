<!-- resources/views/frontend/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Omkar Engineering</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('frontend.partials.navbar')

<div class="container">
    @yield('content')
</div>

@include('frontend.partials.footer')

</body>
</html>