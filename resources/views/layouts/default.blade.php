<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('main.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.ts'])

</head>

<body id="app-client" class="bg-background">
    @include('partials.headers.header')

    @yield('content')

    @include('partials.footer')

    <script type="module" src="{{ asset('js/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ asset('js/ionicons.js') }}"></script>

</body>

</html>
