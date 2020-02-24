<div class="container">
    <h3 class="client-title">Nuestras representaciones</h3>
    <h4 class="title-subline">Represtamos a las mejores marcas del mercado</h4>
    <div class="container-fluid">
        <div class="cms_banner">
          <div class="row">
              @foreach($marcas as $marca)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="banner sub-hover">
                  <a href="#"><img src="{{ $marca->featured_image_url }}" alt="Sub Banner1" class="img-responsive" height="200"></a>
                <b><p class="text-center">{{$marca->name }}</p></b>
                </div>
          </div>
          @endforeach
          </div>
        </div>
        </div>
    </div>
