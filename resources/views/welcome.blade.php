@extends('layouts.app')

@section('title',' Bienvenidos a '. config('app.name'))

@section('content')
@include('includes.menu')
@include('includes.demostracion')
@push('styles')
<style>
    .product-layout .item .product-thumb {

        margin-bottom: 3em;
    }

    .center .container .row .image .productblock {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
    }

    .center .container .row>[class *='col-'] {
        display: flex;
        flex-direction: column;
    }
</style>
@endpush

<div id="center">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">NUESTRA COLECCIÓN </h3>
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            @foreach($categories as $category)
                            <li class='tab'><a href="#{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- tab-furniture-->
                @foreach($categories as $category)
                <div id="{{$category->id }}" class="tab-content">
                    @forelse($category->products as $product)
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="{{ url('/products/'.$product->id) }}"> <img
                                            src="{{$product->featured_image_url}}" alt="{{$product->name}}"
                                            title="{{$product->name}}" class="img-responsive" /> <img
                                            src="{{$product->featured_image_url}}" alt="{{$product->name}}"
                                            title="{{$product->name}}" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>

                                        </li>
                                        <li>
                                        </li>
                                        <li>
                                            <form action="{{ url('/products/'.$product->id) }}" method="get">
                                            <button type="submit" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Ver Producto"><i
                                                    class="fa fa-eye"></i></button>
                                        </li></form>
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"></div>
                                    <p class="price product-price"><a href="{{ url('/products/'.$product->id) }}">{{$product->name}}</a></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>Vaya no hay productos para esta sección</p>
                    @endforelse
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="viewmore">
    <div class="btn">
        <a href="{{ asset('/documents/portafolio_icsa.pdf') }} " target="_blank">Vea nuestro portafolio
        </a></div>
  </div>

@include('notices')
@include('includes.representaciones')

@endsection
