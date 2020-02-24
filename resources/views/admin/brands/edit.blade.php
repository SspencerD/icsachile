@extends('layouts.dashboard')
@section('title', 'Editar Marca ICSA')

@section('contenido')

<div class="welcome">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-6" style="position:center">
                <div class="content">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ url('/admin/brands/'.$brand->id.'/edit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="inputPassword4">Nombre</label>
                                <input type="text" class="form-control" name="name"  value="{{ old('name',$brand->name) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Descripción</label>
                                <input type="text" class="form-control" placeholder="somebody" name="description"  value="{{ old('description',$brand->description )}}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subirimagen">
                                        <input name="image" type="file" src="" class="btn btn-primary">
                                        @if($brand->image)
                                        <p class="help-block alert alert-danger">Subir imagen solo si desea remplazar la
                                        <a href="{{ asset('/image/brands/'.$brand->image) }}" target="_blank">imagen actual</a>
                                        </p>
                                        @endif
                                    </label>
                                </div>
                            </div>
                        <div class="row col-md-12 text-center">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        <a href="{{ url('/admin/brands') }}" class="mb-2 mr-2 btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

