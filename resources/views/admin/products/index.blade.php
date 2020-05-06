@extends('layouts.dashboard')
@section('title','Productos')

@section('contenido')
<div class="welcome">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Productos</h2>
                    <a type="button" class="btn btn-success" href="{{ url('/admin/products/create') }}">
                        Nuevo Producto
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
                                <th scope="col">#</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Cod Proveedor</th>
                                <th scope="col">Unidad Medida</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Precio Compra</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        @foreach($productos as $producto)
                        <tbody>
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->code }}</td>
                                <td>{{ $producto->name}}</td>
                                <td>{{ $producto->description}}</td>
                                <td>{{ $producto->category_name}}</td>
                                <td>{{ $producto->provider}}</td>
                                <td>{{ $producto->cod_provider}}</td>
                                <td>{{ $producto->unit_mesure}}</td>
                                <td>{{ $producto->lot_provider}}</td>
                                <td>$ {{ $producto->price}}</td>
                                <td>&euro; {{ $producto->price_buy}}</td>
                                <td>{{ $producto->quantity}}</td>
                                <td class="">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip"
                                            data-placement="top" title="Ver Producto">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$producto->id.'/images') }}" type="button"
                                            class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                            title="Ver Producto">
                                            <i class="fas fa-images"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$producto->id.'/edit') }}" type="button"
                                            class="btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                            title="Editar producto">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ ('/admin/products/'.$producto->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Borrar producto">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center"> {{$productos->links() }}</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
