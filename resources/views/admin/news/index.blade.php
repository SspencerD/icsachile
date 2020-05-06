@extends('layouts.dashboard')
@section('title','Noticias')

@section('contenido')
<div class="welcome">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Noticias </h2>
                    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modalcategories"
                        href="{{ url('/admin/news/create') }}">Nueva Noticia
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
                                <th scope="col">URL</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acciones</th>

                            </tr>
                        </thead>
                        @foreach($notices as $notice)
                        <tbody>
                            <tr>
                                <td><img src="{{ $notice->featured_image_url}}" alt="" height="50"></td>
                                <td class="">{{ $notice->id}}</td>
                                <td class="">{{ $notice->name}}</td>
                                <td>{{ $notice->url }}</td>
                                <td>{{ $notice->description}}</td>
                                <td class="">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{ ('/admin/news/'.$notice->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <a href="" type="button" class="btn btn-primary btn-sm"
                                                data-toggle="tooltip" data-placement="top" title="Ver categoria">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        <a href="{{ url('/admin/news/'.$notice->id.'/edit') }}" type="button" class="btn-warning btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Editar categoria">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Borrar categoria">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal fade" id="modalcategories" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Nueva Noticia</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form action="{{ '/admin/news'}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="paneles"
                                                name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Descripción</label>
                                            <input type="text" class="form-control" id="descripcion"
                                                placeholder="algo..." name="description"
                                                value="{{ old('description') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="url">URL</label>
                                            <input type="text" class="form-control" id="url"
                                                placeholder="algo..." name="url"
                                                value="{{ old('url') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="imagen">Subir imagen</label>
                                            <input type="file" class="form-control btn-primary" id="imagen" name="image"
                                                value="{{ old('image') }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success">Crear</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="text-center">{{ $notices->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
