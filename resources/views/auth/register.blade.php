<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Acceso</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Administración</b> BLOG</a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger fade show" role="alert">
            <div class="container">
                    <span class="alert-icon">
                        <i class="now-ui-icons ui-1_bell-53 mr-2"></i>
                    </span>

                {!! implode($errors->all(), ' | ') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">
        <i class="now-ui-icons ui-1_simple-remove"></i>
      </span>
                </button>
            </div>
        </div>
@endif


<!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Registrate para acceder</p>

            {!! Form::open(['route' => 'register']) !!}

            {!! Form::bsText('name') !!}

            {!!Form::label('email', 'E-Mail', ['class' => 'control-label']) !!}

            {!! Form::email('email', '', ['class' => 'form-control']) !!}

            {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}

            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}

            {!! Form::label('password', 'Confirm Password', ['class' => 'control-label']) !!}

            {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm']) !!}

            {!! Form::bsSubmit('Register', ['class' => 'btn btn-primary mt-2 mb-2']) !!}

            {!! Form::close() !!}

                <a href="#">@lang('text.login.forgot')</a>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>

</body>
</html>
