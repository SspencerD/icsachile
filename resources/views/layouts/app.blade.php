<html lang="es">
<!DOCTYPE html>

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title',config('app.name'))</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('image/favicon.png') }}" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset ('js/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lg-fb-comment-box.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lg-transitions.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="{{ asset('javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet"
        media="screen" />
    <script src="{{ url('https://code.jquery.com/jquery-2.2.4.min.js') }}"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/template_js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/template_js/template.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery-all.min.js"></script>
    <script src=""></script>
    <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
    <script>
        type="text/javascript"
    </script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    @yield('estilo')
    {{!! htmlScriptTagJSApi(['action'=>'homepage']) !!}}
</head>

<body>
    <div class="preloader loader" style="display: block;"> <img src="{{ asset('image/loader.gif') }}" alt="#" /></div>
    <div class="container">
        @yield('content')
    </div>
    <a id="scrollup">Scroll</a>
    <script src="{{ asset('js/jquery.parallax.js') }}"></script>
    <script src="https://kit.fontawesome.com/fd40c217d2.js" crossorigin="anonymous"></script
    <script>
        jQuery(document).ready(function ($) {
          $('.parallax').parallax();
      });
    </script>
</body>

</html>
