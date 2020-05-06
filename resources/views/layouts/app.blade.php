<html lang="es">
<!DOCTYPE html>

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title',config('app.name'))</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio oficial de Industria Corchera S.A" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ url('image/icsa.ico') }}" rel="icon" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('js/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" />
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css') }}">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
    {{-- {{!! htmlScriptTagJSApi(['action'=>'homepage']) !!}} --}}
    @stack('styles')
    @stack('separation')
</head>
<body>
    <div class="preloader loader" style="display: block;"> <img src="{{ asset('image/loader.gif') }}" alt="#" /></div>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/template_js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/template_js/template.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
    <script> type="text/javascript"</script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    <a id="scrollup" data-toggle="tooltip" data-placement="left" title="Nuestro nuevo Isotipo!">Scroll</a>
    <script src="{{ asset('js/jquery.parallax.js') }}"></script>
    <script src="https://kit.fontawesome.com/fd40c217d2.js" crossorigin="anonymous"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
          $('.parallax').parallax();
      });
    </script>
      @include('includes.footer')
</body>

</html>
