<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benang Asa</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> -->
    <link href="{{ asset('assets/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        .home-product-card { width: 15rem; }
        .ratio-3x4 { --bs-aspect-ratio: calc(4 / 3 * 100%); }
        .hero-image { object-fit: cover; object-position: center 12%; }
        .promo-image { object-fit: contain; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.header')
    <main class="flex-grow-1">@yield('content')</main>
    @include('partials.footer')
</body>
</html>
