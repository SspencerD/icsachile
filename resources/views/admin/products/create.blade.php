@extends('layouts.dashboard')
@section('title', 'Creación de producto ICSA')

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
                    <form method="POST" action="{{ '/admin/products'}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Codigo</label>
                            <input type="text" class="form-control" name="code" value="{{ old('code')}}">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputPassword4">Nombre</label>
                                <input type="text" class="form-control" name="name"  value="{{ old('name')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Descripción</label>
                                <input type="text" class="form-control" placeholder="somebody" name="description"  value="{{ old('description')}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Categoria</label>
                                <select id="inputState" class="form-control" name="category_id"  value="{{ old('category_id')}}">
                                    <option selected>Elegir</option>
                                    <option value="">sin categoria</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Proveedor</label>
                                <input type="text" class="form-control" name="provider"  value="{{ old('provider')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Codigo proveedor</label>
                                <input type="text" class="form-control" name="cod_provider" value="{{ old('cod_provider')}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputZip">Unidad medida</label>
                                <input type="text" class="form-control" name="unit_mesure" value="{{ old('unit_mesure')}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Lote</label>
                                <input type="text" class="form-control" name="lot_provider" value="{{ old('lot_provider')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="inputZip">Precio</label>
                                <input type="number" step="00.000,00 " class="form-control" name="price" value="{{ old('price')}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Precio compra</label>
                                <input type="number" step="00.000,00 " class="form-control" name="price_buy" value="{{ old('price_buy')}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Cantidad</label>
                                <input type="number" step="00.000,00 " class="form-control" name="quantity" value="{{ old('quantity')}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md12">
                                <label for="validationTextarea">Descripción detallada</label>
                                <textarea class="form-control is-invalid" name="long_description"
                                    placeholder="Required example textarea" required>{{ old('long_description')}}"</textarea>
                            </div><br><br>

                        </div>
                        <div class="row col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
