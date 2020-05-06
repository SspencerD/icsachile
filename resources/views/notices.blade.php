<hr>
<br>
<br>
<br><br>
<h3 class="productblock-title">Ultimas noticias</h3>
<br><br><br>
    @foreach($notices as $notice)
    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="item">
            <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html">
                        <img src="{{$notice->featured_image_url}}" alt="{{ $notice->name }}" title="{{$notice->name}}"
                            class="img-responsive" />
                        <img src="{{$notice->featured_image_url}}" alt="{{$notice->name}}" title="{{$notice->name}}"
                            class="img-responsive" /> </a>
                    <ul class="button-group">
                        <li>
                            {{--  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button> --}}
                        </li>
                        <li>
                            {{-- <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button> --}}
                        </li>
                        <li>
                            <form action="{{$notice->url}}" method="get">
                                <button type="submit" class="quick-view" data-toggle="tooltip" data-placement="top"
                                    title="Ver Noticia"><i class="fas fa-newspaper"></i></button>
                            </form>
                        </li>
                        <li>
                            {{--   <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button> --}}
                        </li>
                    </ul>
                </div>
                <div class="caption product-detail">
                    <div class="rating"><span>
                    <p>{{$notice->created_at }}</p>
                        </span></div>
                    <h4 class="product-name"><a href="{{ $notice->url }}"
                            title="{{$notice->name }}">{{$notice->name }}</a></h4>
                    <p class="price product-price">{{$notice->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
