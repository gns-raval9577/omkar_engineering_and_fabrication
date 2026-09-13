<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@hasSection('title')@yield('title') - {{ config('app.name', 'Omkar Engineering and Fabrication') }}@else{{ config('app.name', 'Omkar Engineering and Fabrication') }}@endif</title>

    <meta name="description" content="Omkar Engineering and Fabrication - Premium industrial fabrication and engineering services.">
    <meta name="keywords" content="engineering, fabrication, industrial, manufacturing, construction, Omkar Engineering">
    <meta name="author" content="Omkar Engineering and Fabrication">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/img/favicon.png') }}" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>