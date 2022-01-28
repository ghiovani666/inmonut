<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title_page')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Default CSS -->
    @section('head')
    @include('web.layouts.partials.head')
    @show
    <!-- CSS Page para las paginas a instanciar -->
    @yield('head_page')

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!-- Header para todas las paginas -->
    @include('web.layouts.partials.header')

    @yield('content')
    <!-- Footer para todas las paginas -->
    @include('web.layouts.partials.footer')

    <!-- Codigo JS para todas las paginas -->
    @include('web.layouts.partials.footer_js')

    @yield('footer_page')

  </div>
</body>


<script type="text/javascript">
    $('#sendFormServicios').on('submit', function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        axios.post('enviar_email_informacion',
            formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function(response) {

          console.log(response.data);
          $('.form-message').html(response.data);
        }).catch(function() {
            console.log('FAILURE!!');
        });

    });
    </script>

</html>