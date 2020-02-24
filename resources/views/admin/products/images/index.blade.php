@extends('layouts.dashboard')
@section('title','Productos')

@section('contenido')
<div class="welcome">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Imagenes</h2>
                    <p>las imagenes que acompañanan tu producto</p>

                    <form action="" method="post" enctype="multipart/form-data" class="form-row">
                        @csrf
                        <div class="col-md-12">
                            <input class="btn btn-primary" type="file" name="photo" required>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">
                                    <i class="fas fa-upload"></i>Cargar imagen
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col">
                            <a href="{{'/admin/products'}}" type="button" aria-haspopup="true" aria-expanded="false"
                                class="btn btn-danger">
                                <i class="fas fa-arrow-alt-circle-left"></i>
                                Volver al listado
                            </a>
                        </div>
                    </form>
                    <div class="card-group">
                        @foreach ($images as $image)
                        <div class="card">
                            <img class="card-img-top" src="{{ $image->url }}" alt="Card image cap" width="270"
                                height="210">
                            <div class="card-body">
                                <h5 class="card-title">{{$image->product_name}}</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Creado:      {{$image->created_at}}</small>
                                <form action="" method="post">
                                    @csrf @method('DELETE')
                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                    @if ($image->featured)
                                    <button type="button" class="btn btn-success btn-sm btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Destacado">
                                        <i class="fas fa-check-double"></i>
                                    </button>
                                    @else
                                    <a href=" {{ url('/admin/products/'.$product->id.'/images/select/'.$image->id ) }}"
                                        class="btn btn-warning btn-sm btn-round " data-toggle="tooltip"
                                        data-placement="top" title="Destacar Imagen">
                                        <i class="fas fa-star"></i>
                                    </a>
                                    @endif
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                        data-placement="top" title="Eliminar">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
