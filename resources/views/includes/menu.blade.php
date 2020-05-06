<header>
    <nav id="menu" class="navbar">
        <div class="nav-inner">
            <div class="col-lg-4">
                <div id="logo"> <a href="{{ url('/') }}"><img src="{{ asset('image/logo1.png') }}"
                            title="Industria Corchera" alt="" class="img-responsive" /></a> </div>
            </div>
            <div class="navbar-header">
                <span id="categoria" class="visible-xs">Menu</span>
                <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
            </div>
            <div class="col-lg-12">
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
        </div>
    </nav>
</header>
