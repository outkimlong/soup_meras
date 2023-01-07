<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title> </title>
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/plugins/iCheck/all.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                @include('layouts.header')
            </header>
            <aside class="main-sidebar">
                @include('layouts.sidebar')
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
            <footer class="main-footer">
                <strong>Version <a href="#">2.4.13</a></strong>
            </footer>
        </div>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <script>$.widget.bridge('uibutton', $.ui.button)</script>
        <script src="{{ asset('admin-2.4.15/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/plugins/iCheck/icheck.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/dist/js/demo.js') }}"></script>
        <script>
            $(function () {
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass   : 'iradio_minimal-red'
                })
            });
        </script>
    </body>

</html>
