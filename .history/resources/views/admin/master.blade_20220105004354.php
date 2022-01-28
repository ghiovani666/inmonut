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
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
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

    <script type="text/javascript">

    //******************global****************** */
    function openModal(txt_id_home,isClass) {
        $('#exampleModal').modal('show')
        obtenerDatosModal(txt_id_home,isClass)
    }
    const obtenerDatosModal = (txt_id_home,isClass) => {
        $('input[name=txt_id_home]').val(txt_id_home);
        axios.post('dashboard_home_edit_imagen', {
                'txt_id_home': txt_id_home,
                'txt_isclass': isClass,
            })
            .then(function(response) {
                $('textarea[name=txt_titulo1]').val(response.data[0].title1);
                $('textarea[name=txt_titulo2]').val(response.data[0].title2);
            }).catch(function(error) {
                if (error.response.status) {
                    alert('No existe ..! Gracias1')
                }
            })
    }


    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();
        $('#exampleModal').modal('hide')
        let formData = new FormData(this);
        axios.post('dashboard_home_actualizar_imagen',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            $('#imagen_' + response.data[1]).html(response.data[0]);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });

    $('#uploadFooter').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('dashboard_home_actualizar_footer',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            console.log('Successfully!!');
            $('#msj_alert').html('<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>').fadeOut(9500);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });

    // ********************clases************************ //

    $('#clases_guardar_descripcion').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('clases_guardar_descripcion',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            $('#msj_alert').html('<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>').fadeOut(9500);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });
    // ********************fitness************************ //

    $('#fitness_guardar_descripcion').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('fitness_guardar_descripcion',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            $('#msj_alert').html('<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>').fadeOut(9500);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });

    // ********************entrenador************************ //

    $('#entrenador_guardar_descripcion').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('entrenador_guardar_descripcion',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            $('#msj_alert').html('<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>').fadeOut(9500);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });


        //::::::::::::::::::::::::::::::::::::::SERVICIOS TRAININNG

        $('#saveServiciosTraining').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('saveServiciosTraining',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {
            $('#msj_alert').html('<div class="alert alert-success" role="alert">Actualizado Correctamente.!</div>').fadeOut(9500);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });


    </script>

</body>

</html>