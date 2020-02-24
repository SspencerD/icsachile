@extends('layouts.dashboard')
@section('title','Marcas')

@section('contenido')
<div class="welcome">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Marca</h2>
                    <a type="button" class="btn btn-success" href="{{ url('/admin/brands/create') }}">Nueva Marca
                        <i class="fas fa-plus-circle"></i>

                    </a>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table" style="color:beige">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acciones</th>

                            </tr>
                        </thead>
                        @foreach($brands as $brand)
                        <tbody>
                            <tr>
                                <td><img src="{{ $brand->featured_image_url}}" alt="" height="50"></td>
                                <td class="">{{ $brand->id}}</td>
                                <td class="">{{ $brand->name}}</td>
                                <td>{{ $brand->description }}</td>
                                <td class="">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{ ('/admin/brands/'.$brand->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <a href="" type="button" class="btn btn-primary btn-sm"
                                                data-toggle="tooltip" data-placement="top" title="Ver marca">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ url('/admin/brands/'.$brand->id.'/edit') }}" type="button"
                                                class="btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                                title="Editar marca">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Borrar marca">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
