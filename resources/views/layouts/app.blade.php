<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    @include('components.navbar')

    @include('components.sidebar')

    <div class="content-wrapper">
        <section class="content p-3">
            @yield('content')
        </section>
    </div>

    @include('components.footer')

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>