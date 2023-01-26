<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics II</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- partial header --}}
    @include('partials.header')

    {{-- main / yield--}}
    @yield('main')

    {{-- partial footer --}}
    @include('partials.footer')
</body>
</html>