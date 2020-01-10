<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>REGES</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .content {
            text-align: center;
        }
    </style>
</head>
<body>

<div id="app">
    @include('inc.navbar')
    <div class="container">
        @include('inc.errormessage')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>

