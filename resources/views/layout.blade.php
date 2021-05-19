<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Css--}}
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    {{--JS--}}
    <script src="/js/jquery-3.5.1.min.js" defer></script>
    <script src="/js/bootstrap.min.js" defer></script>
    <script src="/js/main.js" defer></script>

    @yield('head')

    <title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
    <header id="header">
        @yield('logo')
        <nav class="navbar menu navbar-expand-lg navbar-light">
            @include('components.menu')
        </nav>

    </header>
    <main class="container content">
        @yield('content')
    </main>
    <footer>
        <nav class="navbar menu navbar-expand-lg navbar-dark">
            @include('components.menu')
        </nav>
    </footer>
</div>
</body>
</html>
