@extends('layouts.app')

@section('title',' Categorias   '. config('app.name'))

@section('content')
@include('includes.menu')
@push('styles')
<style>
    .grid-list-wrapper.product-layout .product-list .col-xs-12 .product-thumb {

margin-bottom: 1em;
}

.image .product-imageblock .product-thumb {
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
<body class="category col-2 left-col">
    <div class="breadcrumb parallax-container">
    <h1 class="category-title">{{ $category->name }}</h1>
    </div>
    <div class="container">
      <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
          <div class="Categories left-sidebar-widget">
            <div class="category_block">
            </div>
          </div>
          <div class="filter left-sidebar-widget">
            <div class="filter-block">
              <div class="list-group">
                <p class="list-group-item"></p>
                <div class="list-group-item">
                  <div id="filter-group1">
                  </div>
                </div>
                <p class="list-group-item"></p>
                <div class="list-group-item">
                  <div id="filter-group2">
                  </div>
                </div>
                <p class="list-group-item"></p>
                <div class="list-group-item">
                  <div id="filter-group3">
                  </div>
                </div>
              </div>
              <div class="panel-footer">
              </div>
            </div>
          </div>
          <div class="special left-sidebar-widget">
          </div>
        </div>
        <div class=" content col-sm-9">
          <div class="category-page-wrapper">
            <div class="col-md-2 text-right sort-wrapper">
            </div>
            <div class="col-md-1 text-right page-wrapper">
            <label class="control-label" for="input-limit">Show : {{$products->count()}}</label>
            </div>

            <div class="col-md-6 list-grid-wrapper"> <a href="#" id="compare-total"></a>
              <div class="btn-group btn-list-grid">
                <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"></button>
                <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
              </div>
            </div>
          </div>
          <br />
          <div class="grid-list-wrapper">
              @foreach($products as $product)
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image product-imageblock">
                <a href="{{$product->featured_image_url}}" data-fancybox="images-preview"
                data-width="1500" data-height="1000">
                <img src="{{$product->featured_image_url}}" alt="{{$product->name }}" title="{{$product->name }}" class="img-responsive" />
                <img src="{{$product->featured_image_url}}" alt="{{$product->name }}" title="{{$product->name }}" class="img-responsive" />
                </a>
                  <ul class="button-group grid-btn">
                   {{--  <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart">Add to Cart</button>
                    </li> --}}
                  </ul>
                </div>
                <div class="caption product-detail">
                  <h4 class="product-name"><a href="#" title="{{ $product->name}}">{{ $product->name }}</a></h4>
                <p class="product-desc">{{$product->long_description }}</p>
                  <ul class="button-group list-btn">
                    {{-- <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endsection
