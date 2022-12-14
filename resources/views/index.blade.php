<!DOCTYPE html>
<html style="color:#1f2630" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Altex</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Bootstrap icons-->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700,900,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        

        <!-- Script -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>
            a:link {
                text-decoration: none;
            }
            /* body {
                background: url("/img/zambo.jpg") cover;
            } */
        </style>
    </head>
    <body >
        <div id="app">
            <router-view></router-view>
            <!-- <div id="preloader"></div> -->
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    </body>
    </html>

    <script>
        AOS.init();
    </script>
