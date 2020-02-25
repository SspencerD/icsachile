@extends('layouts.app')

@section('title',' Bienvenidos a| '. config('app.name'))

@section('content')
@include('includes.menu')
@include('includes.demostracion')
<div id="center">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">Nuestros productos</h3>
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            @foreach($categories as $category)
                            <li class='tab'><a href="#tab-{{$category->name}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- tab-furniture-->
                @foreach($categories as $category)
                <div id="tab-{{$category->name}}" class="tab-content">
                    @forelse($category->products as $product)
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{$product->featured_image_url}}" alt="{{$product->name}}"
                                            title="{{$product->name}}" class="img-responsive" /> <img
                                            src="{{$product->featured_image_url}}" alt="{{$product->name}}"
                                            title="{{$product->name}}" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>

                                            <form action="{{ url('/products/'.$product->id) }}" method="get">
                                            <button type="submit" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Ver Producto"><i
                                                    class="fa fa-eye"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <p class="price product-price">{{ $product->name }}</p>
                                    <h4 class="product-name"><a href="#"
                                            title="{{ $product->name }}">{{ $product->description }}</a></h4>
                                    <p class="price product-price">{{ $product->category_name }}
                                        <h3 class="price-tax">{{$product->code }}</h3>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p> Vaya , no hay ningún producto en esta categoria 😞</p>
                        @endforelse
                    </div>
                    <div class="viewmore">

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- Noticias --}}
@include('includes.notices')
@guest
{{--  Registro rapido  --}}
@endguest
{{--  representaciones  --}}
@include('includes.representaciones')
{{--  footer  --}}
<div class="text-center">
    @include('includes.footer')
</div>
@endsection
