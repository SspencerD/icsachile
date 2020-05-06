@extends('layouts.app')

@section('title','PostVenta | '. config('app.name'))
@section('content')
@include('includes.menu')

<div class="jumbotron jumbotron-fluid " style="background-color:white">
    <div class="container">
        <h1 class="display-4 text-center">Contactanos</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h3 class="contactus-title">Tu tienes las preguntas nosotros las respuestas.</h3>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="complaint">
                <i class="fas fa-phone" style="font-size: 30px"></i>
                <h2 class="text-center">Telefono</h2>
                <div class="call-info"><a href="tel:+5622268300">+562-2268300</a></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="email">
                <i class="far fa-envelope " style="font-size: 30px"></i>
                <h2 class="text-center">Correo</h2>
                <div class="email-info"><a
                        href="mailto:asistentecomercial@corchera.cl">asistentecomercial@corchera.cl</a></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="time">
                <i class="fas fa-store" style="font-size: 30px"></i>
                <h2 class="text-center">Horario atención</h2>
                <div class="time-info">Lun – Juev: 8:30 – 18:30 <br> Vie: 8:30 - 14:00</div>
            </div>
        </div>
    </div>
    <div class="main-form">
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
        <h3 class="contactus-title">Contactanos</h3>

    <form method="post" action="{{ route('enviar') }}">
        @csrf
            <div class="field name-box">
                <label for="name">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Quien eres?" />
            </div>

            <div class="field email-box">
                <label for="email">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="name@email.com" />
            </div>
            <div class="field quote-box">
                <label for="asunto">Asunto</label>
                <input type="asunto" id="asunto" name="asunto" placeholder="necesito cotizar" />
            </div>

            <div class="field msg-box">
                <label for="msg">Mensaje</label>
                <textarea id="msg" rows="4" placeholder="Su mensaje" name="mensaje"></textarea>
            </div>
            <input class="button btn btn-primary" type="submit" value="Enviar" />
        </form>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.7269902709977!2d-70.65582600505433!3d-33.51613751796975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662dae8c7ee7975%3A0x2eaf68edab472285!2sIndustria%20Corchera%20S.A!5e0!3m2!1ses-419!2scl!4v1582302013062!5m2!1ses-419!2scl"
                    width="1000" height="600" frameborder="1" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
</div>
 @endsection
