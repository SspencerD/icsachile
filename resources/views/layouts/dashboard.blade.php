<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title','Sistema de Gestión' .config('app.name'))</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
</head>

<body>
    <aside class="side-nav" id="show-side-navigation1">
        <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
        <div class="heading">
            <img src="{{ asset('image/user1.jpg')}}" alt="">
            <div class="info">
                <h3><a href="#">{{Auth::user()->name }}</a></h3>
                <p>{{ auth()->user()->roles }}</p>
            </div>
        </div>
        <div class="search">
            <input type="text" placeholder="Busca aqui"><i class="fa fa-search"></i>
        </div>
        <ul class="categories">
            <li><i class="fab fa-internet-explorer"></i><a href="/"> Volver al sitio</a>
            </li>
            <li><i class="fas fa-warehouse"></i><a href="#"> Gestión</a>
                <ul class="side-nav-dropdown">
                    <li><a href="{{ url('/admin/categories') }}">Categorias</a></li>
                    <li><a href="{{ url('/admin/products') }}">Productos</a></li>
                    <li><a href="{{ url('/admin/brands') }}">Representaciones</a></li>


                    {{-- <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li> --}}
                </ul>
            </li>
            <ul class="categories">
                <li>
                    <i class="fas fa-align-center"></i> <a href="#">Otros</a>
                    <ul class="side-nav-dropdown">
                        <li>Noticias</li>
                    </ul>
                </li>
            </ul>
            {{--     <li><i class="fa fa-support fa-fw"></i><a href="#"> Subscribe us</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-envelope fa-fw"></i><a href="#"> Contact us</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="#"> Our team</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-bolt fa-fw"></i><a href="#"> Testimonials</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <p>Example:</p>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a></li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> About UI &amp; UX <span class="num succ">43</span></a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="#"> Something else</a></li>
      </ul> --}}
    </aside>
    <section id="contents">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="fa fa-align-right"></i>
                    </button>
                    <a class="navbar-brand" href="#"><span class="main-color">Sistema de Gestión</span></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Mi cuenta<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fas fa-cogs"></i> Configurar</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o fw"></i> Mi Buzón</a></li>
                                <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Ayuda</a></li>
                                <li role="separator" class="divider"></li>
                                <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form><i class="fa fa-sign-out"></i> Desconectarse
                                    </a>
                                </li>

                            </ul>

                            {{-- li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
              <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li> --}}
                        <li><a href="#"><i data-show="show-side-navigation1" class="fas fa-bars show-side-btn"></i></a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('contenido')
        {{--   <section class='statis text-center'>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="box bg-primary">
                  <i class="fa fa-eye"></i>
                  <h3>5,154</h3>
                  <p class="lead">Page views</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box danger">
                  <i class="fa fa-user-o"></i>
                  <h3>245</h3>
                  <p class="lead">User registered</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box warning">
                  <i class="fa fa-shopping-cart"></i>
                  <h3>5,154</h3>
                  <p class="lead">Product sales</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="box success">
                  <i class="fa fa-handshake-o"></i>
                  <h3>5,154</h3>
                  <p class="lead">Transactions</p>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        {{-- <section class="chrt3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-9">
                <div class="chart-container">
                  <canvas id="chart3" width="100%"></canvas>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                </div>
              </div>
            </div>
          </div>
        </section> --}}
    </section>
    <script src='http://code.jquery.com/jquery-latest.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src="https://kit.fontawesome.com/fd40c217d2.js" crossorigin="anonymous"></script>
    <script src='{{ asset('js/dashboard.js')}}'></script>
</body>

</html>
