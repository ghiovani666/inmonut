<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('template_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template_admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/summernote/summernote-bs4.min.css')}} ">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet"
        href="{{asset('template_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
    <link rel="stylesheet"
        href="{{asset('template_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}} ">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.partial.preloader')
        @include('admin.partial.navbar')
        @include('admin.partial.sidebar')
        @yield('content')
        @include('admin.partial.footer')

    </div>

    <!-- jQuery -->
    <script src="{{asset('template_admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('template_admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('template_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('template_admin/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('template_admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('template_admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('template_admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('template_admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('template_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}">
    </script>
    <!-- Summernote -->
    <script src="{{asset('template_admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('template_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('template_admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('template_admin/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('template_admin/dist/js/pages/dashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    <!-- DataTables  & Plugins -->
    <script src="{{asset('template_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('template_admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- scrips Extra -->
    <script src="{{asset('template_admin/js/servicios.js')}}"></script>
    <script src="{{asset('template_admin/js/serviciosTraining.js')}}"></script>
    <script src="{{asset('template_admin/js/serviciosTitulo.js')}}"></script>

</body>

</html>