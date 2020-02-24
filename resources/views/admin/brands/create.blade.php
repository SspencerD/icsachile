@extends('layouts.dashboard')
@section('title', 'Creación de Representación ICSA')

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
                    <form method="POST" action="{{ '/admin/brands'}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Descripción</label>
                                <input type="text" class="form-control" name="description"  value="{{ old('description')}}">
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="file" name="image" class="btn btn-primary btn-lg" >
                                </div>
                            </div>
                            <div class="row col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Crear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
