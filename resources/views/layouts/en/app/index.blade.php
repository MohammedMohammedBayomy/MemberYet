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
    <link href="/layout_1/LTR/seed/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/seed/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/seed/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/seed/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/layout_1/LTR/seed/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/js/main/jquery.min.js"></script>
    <script src="/js/main/bootstrap.bundle.min.js"></script>
    <script src="/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/layout_1/LTR/seed/assets/js/app.js"></script>
    <!-- /theme JS files -->
</head>

<body class="navbar-top">

    @include('layouts/en/app/user-navbar')

    <!-- Page content -->
    <div class="page-content">

        @include('layouts/en/app/user-sidebar')

        @include('layouts/en/app/content')

    </div>
    <!-- /page content -->

</body>
</html>
