@extends('layouts.app')

@section('title',' Bienvenidos a| '. config('app.name'))

@section('content')
@include('includes.menu')
@include('includes.demostracion')
<div id="center">
    {{-- Demostración empresa --}}
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h2>Nuestro Catalogo </h2>
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            @foreach($categories as $category)
                            <li class='tab'><a href="#tab-{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                            <hr>
                        </ul>
                    </div>
                </div>
                <!-- tab-tapones-->
                @foreach($categories as $category)

            <div id="tab-{{$category->name }}" class="tab-content">
                @foreach ($products as $product)
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="card card-product">
                            <div class="img-wrap"><img src="{{ $product->featured_image_url }}" height="250"></div>
                                <figcaption class="info-wrap">
                                <h4 class="title">{{ $product->name }}</h4>
                                    <p class="desc"></p>
                                    <div class="rating-wrap">
                                        <div class="label-rating"></div>
                                    </div> <!-- rating-wrap.// -->
                                </figcaption>
                                <div class="bottom-wrap">
                                    <div class="price-wrap h5">
                                        <span class="price-new alert-success">Stock disponible</span>
                                    </div> <!-- price-wrap.// -->
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div> <!-- col // -->
                    </div>
                    @endforeach
                </div>
                @endforeach

                <!-- tab-barricas-->

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
