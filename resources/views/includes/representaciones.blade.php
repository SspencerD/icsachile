<div class="container">
    <div class="row">
      <div class="cms_banner">
          <h2>Nuestras representaciones</h2>
          @foreach($marcas as $marca)
            <div class="col-xs-3 col-md-4">
              <div id="subbanner1" class="banner sub-hover">
              <a href="#"><img src="{{$marca->featured_image_url}}" alt="Sub Banner1" class="img-responsive" title="{{$marca->name }}"></a>
                <div class="bannertext">
                  <p></p>

                </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
