<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dealer Vespa')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 text-gray-900">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>