@extends('layouts.app')

@section('title','PostVenta | '. config('app.name'))
@section('content')
@include('includes.menu')
<div class="container">
    <div class="jumbotron jumbotron-fluid " style="background-color:white">
        <div class="container">
            <h1 class="display-4 text-center">Servicio Post-Venta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5"><img class="img-responsive" src="{{ url('image/postventa.jpg')}}" alt="#" height="900">
        </div>
        <div class="col-md-12">
            <h2 class="text-center"><br><br><br>Señalamos a continuación los
                siguientes requerimientos para asegurar un servicio confiable a nuestros clientes: </b> </h2>
        </div>
        <div class="col md 8">
            <p style="font-size:20 ">
                Con el objetivo de la búsqueda permanente por mejorarla entrega de nuestros servicios,
                los cuales están orientados a la entrega de soluciones que contribuyan a aumentar la calidad de nuestra
                cadena de suministros, es de nuestro agrado presentarle los servicios de Postventa, los cuales consisten
                en Re-procesos de tratamiento y humectación de tapones, enfocado a todos aquellos saldos de mercaderías
                almacenados en vuestras bodegas y que ya han cumplido con los tiempos de uso establecidos por el
                proveedor.

            </p>
        </div>
    </div>
    <p><b>Re-Proceso</b></p>
    <span><b>* En caso de re-tratamiento aplica solo para corchos tratados en Industria Corchera S.A.</b></span>
    <br><br><ul style="font-size:20" class="hover">
        <li>Tapones con una antigüedad máxima de 12 meses a contar de la fecha de tratamiento que se adjunta en nuestras etiquetas</li>
        <li>Todos los despachos que nos envíen deben estar bajo una Orden de compra.</li>
        <li>Cantidad mínima para realizar el servicio: 3.000 tapones.</li>
        <li>El embalaje del producto debe venir claramente identificado:</li>
        <li>Cajas bien selladas, especial cuidado en bolsas, estas deben venir sin roturas o daños</li>
        <li>Informar día-hora y transporte para posterior recepción en Industria Corchera S.A</li>
        <li><b>Industria Corchera no se responsabiliza por contaminaciones cruzadas de los envíos directos desde Viña.</b></li>
        <li>El despacho es por parte de ICSA.</li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-auto">
            <p style="font-size:18 ">
            Para solicitar el servicio , favor contactar a la dirección electronica de Carolina Inostroza
            <a href="mailto:Asistentecomercial@corchera.cl">Asistentecomercial@corchera.cl</a>
            </p>
        </div>
        <div class="col-auto">
            <p style="font-size:18 ">
           Cariny Alegria , Responsable departamento de aseguramiento y calidad
            <a href="mailto:Calegria@corchera.cl">Calegria@corchera.cl</a>
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>

</div>
@endsection
