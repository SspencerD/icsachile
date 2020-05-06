@extends('layouts.app')

@section('title','Ver Producto  '. config('app.name'))
<div class="preloader loader" style="display: block;"> <img src="{{ asset('image/loader.gif') }}" alt="#" /></div>
@section('content')
@include('includes.menu')

@if(session('notificacion'))
<div class="alert alert-success">
    {{ session('notificacion') }}
</div>
@endif
<br>
<br>
<br>
<div class="container">
        <div class="content col-sm-12">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thumbnails">
                        <div>
                            <a class="thumbnail" data-fancybox-trigger="preview" href="javascript:;"
                                title="{{$products->name}}"><img src="{{$products->featured_image_url }}"
                                    title="{{$products->name}}" alt="{{$products->category_name }}" /></a>
                        </div>
                        <div id="product-thumbnail">
                            @forelse($images as $image)
                            <div class="item col-sm-3">
                                <div class="image-additional"><a class="thumbnail" data-fancybox="preview" href="{{$image->url}}"
                                        target="_blank" title="{{$products->name}}"> <img src="{{$image->url}}"
                                            title="{{$products->name}}" alt="image" /></a></div>
                            </div>
                            @empty
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" data-fancybox="preview" href="{{$image->url}}"
                                        target="_blank" title="Vaya no hay imagen para este producto"> <img
                                            src="{{ url('image/default.gif')}}"
                                            title="Vaya no hay imagen para este producto" alt="image" /></a></div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 prodetail">
                <h1 class="productpage-title">{{$products->name}}</h1>
                <ul class="list-unstyled productinfo-details-top">
                    {{-- <li>
                        <h2 class="productpage-price">$122.00</h2>
                    </li>
                    <li><span class="productinfo-tax">Ex Tax: $100.00</span></li> --}}
                </ul>
                <hr>
                <p class="product-desc">
                    {{$products->description}}</p>
                {{-- <div id="product">
                    <div class="form-group">
                        <div class="row">
                            <div class="Sort-by col-md-6">
                                <label>Sort by</label>
                                <select id="select-by-size" class="selectpicker form-control">
                                    <option value="#" selected="selected">Small</option>
                                    <option value="#">Medium</option>
                                    <option value="#">Large</option>
                                </select>
                            </div>
                            <div class="Color col-md-6">
                                <label>Color</label>
                                <select id="select-by-color" class="selectpicker form-control">
                                    <option value="#" selected="selected">Blue</option>
                                    <option value="#">Green</option>
                                    <option value="#">Orange</option>
                                    <option value="#">White</option>
                                </select>
                            </div>
                        </div>
                        <div class="qty">
                            <label>Qty</label>
                            <input id="qty" placeholder="1" type="number">
                            <ul class="button-group list-btn">
                                <li>
                                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="addtocart-btn" data-toggle="tooltip"
                                        data-placement="top" title="Add to Cart"><i
                                            class="fa fa-shopping-bag"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                                        title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                                        title="Quick View"><i class="fa fa-eye"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <br>
                <br>

            </div>
        </div>
        <br>
        <br>

        <div class="productinfo-tab">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-description" data-toggle="tab">Descripción</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-description">
                    <div class="cpt_product_description ">
                        <div>
                            <p><strong> {{$products->long_description}}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
