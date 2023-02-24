<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @vite('resources/js/app.js')
    @yield('cdns')
</head>

<body>
    @include('includes.header')
    <main>
        @yield('main-content')
    </main>
    @yield('scripts')
</body>

</html>
