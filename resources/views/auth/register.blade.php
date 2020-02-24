@extends('layouts.amorim')

@section('content')
<br><br><br><br><br><br><br><br><br>
<div class="container-login">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Registrate</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                    <input id="name" type="text" class="form-control @error('name') is-valid @enderror" name="name" value="{{ old('name') }}" placeholder="tu nombre"  required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                    <input id="email" type="email" class="form-control @error('email') is-valid @enderror" name="email" value="{{ old('email') }}" placeholder="example@something.com" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-valid @enderror" name="password" required autocomplete="new-password">
                        @error('password')

                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-valid @enderror" name="password_confirmation" required autocomplete="new-password" data-toggle="tooltip" data-placement="top" title="confirma tu contraseña">
                        @error('password')

                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Registrar" style="font-size:15px" class=" btn login_btn btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
