<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" fill="white" href="{{ asset('images/logo-CAI.svg') }}">
    <title>CAI Appiano</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>


    @include('layouts.partials.footer')

</body>

</html>
