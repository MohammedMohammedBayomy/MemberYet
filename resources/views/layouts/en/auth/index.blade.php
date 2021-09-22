<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/full/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/full/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/full/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/full/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/full/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Laravel Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Core JS files -->
    <script src="/js/main/jquery.min.js"></script>
    <script src="/js/main/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="/layout_1/LTR/full/assets/js/app.js"></script>
    <script src="/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

    <!-- Laravel Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>

<body>

    @yield('content')

</body>
</html>

