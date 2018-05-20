<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Dashboard |@yield('title')</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap-select.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("css/nprogress.css") }}" rel="stylesheet">
        <!-- Dropzone.js -->
        <link href="{{ asset("css/dropzone.css") }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

                @include('includes/footer')

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap-select.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>
         <!-- FastClick -->
        <script src="{{ asset("js/fastclick.js") }}"></script>
        <!-- NProgress -->
        <script src="{{ asset("js/nprogress.js") }}"></script>
        <!-- Dropzone.js -->
        <script src="{{ asset("js/dropzone.js") }}"></script>

        @stack('scripts')

    </body>
</html>