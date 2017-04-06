<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Car Wash - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/1-col-portfolio.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/my.css') }}" >
</head>

<body style='padding-top: 5px;'>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('include.menu')
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class='row' style="text-align: center; margin-top: 55px;">
            <a href='/'>
                <img src="/img/logo.png" style='max-height: 76px;' />
            </a>
        </div>
        @include('include.message')

        @yield('content')

    </div>

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
