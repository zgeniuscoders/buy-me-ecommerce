<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <meta name="description" content="@yield("meta-description")">

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
    @yield("header")

</head>

<body id="app-client" class="bg-background">

    @include('partials.headers.header')

    @yield('content')

    @include('partials.footer')

    @yield("script")

    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

</body>

</html>
