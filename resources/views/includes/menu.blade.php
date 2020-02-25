<header>
    <nav id="menu" class="navbar">
        <div class="nav-inner">
        <div class="col-sm-1 col-xs-1 header-right">
        </div>
            <div class="col-sm-3 col-xs-3 header-left">
                <div id="logo"> <a href="index.html"><img src="image/logoa.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
              </div>
          <div class="navbar-header"><span id="category" class="visible-xs">Categorias</span>
            <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
          </div>
          <div class="navbar-collapse">
            <ul class="main-navigation">
              <li><a href="{{ url('/') }}" class="parent">Inicio</a> </li>
              <li><a href="{{url('/somos')}}" class="parent">Quienes somos</a> </li>
              <li><a href="{{url('/postventa') }}" class="parent">Post Venta</a> </li>
              <li><a href="{{url('/laboratorio') }}" class="parent">Laboratorio</a></li>
              <li class="level-top"><a href="#" class="active parent">Productos</a>
                <ul>
                    @foreach($categories as $category)
                  <li><a href="{{'/categories/'.$category->id }}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li><a href="{{ url('/contacto')}}" class="parent">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
</header>
