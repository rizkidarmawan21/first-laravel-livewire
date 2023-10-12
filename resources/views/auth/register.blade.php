<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Form Pendaftaran Santri</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">



    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="adminLte/index2.html" class="h1">
                    Register IDN
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Daftar menjadi santri baru</p>

                <livewire:form-register />

                {{-- <a href="login.html" class="text-center pt-5">Sudah memiliki akun ? login sekarang</a> --}}
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminLte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
