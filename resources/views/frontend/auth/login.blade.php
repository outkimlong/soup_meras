<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-2.4.15/plugins/iCheck/square/blue.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-box-body">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('name')
                        <span class="text-yellow">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                        <span class="text-yellow">{{$message}}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('admin-2.4.15/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin-2.4.15/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(function () {
                $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>
