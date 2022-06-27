<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MAN 2 Batola</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo-icon.png') }}" rel="apple-touch-icon">

    @include('includes.styles')
</head>

<body>

    @include('includes.header')

    @if (request()->routeIs('home'))
        @include('_hero')
    @endif

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    @include('includes.footer')
    @include('includes.scripts')

</body>

</html>
