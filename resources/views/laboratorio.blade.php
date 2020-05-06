@extends('layouts.app')

@section('title','PostVenta  | '. config('app.name'))
@section('content')
@include('includes.menu')
<div class="container">
    <div class="jumbotron jumbotron-fluid " style="background-color:white">
        <div class="container">
            <h1 class="display-4 text-center">Servicio Laboratorio</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5"><img class="img-responsive" src="{{ url('image/laboratorio.jpg')}}" alt="#" height="900">
        </div>
        <div class="col-md-12">
            <h2 class="text-center">Contamos con los siguientes servicios para nuestros distinguidos clientes.</h2>
        </div>
        <div class="col md 8">
            <p style="font-size:20 ">
                Disponemos de variedades de servicios post-venta para nuestros clientes en la cual se destaca la
                re-utilizaciòn de tapones de corcho ,la vida util es de 6 meses, superior a esta fecha se debe definir
                analisis por parte del proveedor.
            </p>
        </div>
    </div>
                <ul style="font-size:20" class="hover">
                    <li>ánalisis de perfil interno</li>
                    <li>Validación dimensionales para Corcho/Botella</li>
                    <li>Cuantificación de tratamiento</li>
                    <li>Humectaciòn de corcho</li>
                    <li>Reacondicionamiento de corcho (* base 5.000 unds)</li>
                    <li>Fuerza Extracción</li>
                    <li>Capilaridad</li>
                    <li>Test de filtración y desplaziciòn</li>
                </ul>
    <br>
    <br>
    <br>

</div>
 @endsection

