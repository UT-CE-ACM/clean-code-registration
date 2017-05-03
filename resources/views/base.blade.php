<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/img/clean_code_72_color.png" rel="icon" type="image/png">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Clean Code') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

                    <img class="navbar-photo pull-right" src="/img/photo_۲۰۱۷-۰۲-۱۵_۱۱-۵۳-۰۶.jpg" alt="">
                    <li><a href="/rules-and-regulations">قوانین و مقررات</a></li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/js/jquery-3.2.1.js"></script>
@yield('js')
</body>
</html>
