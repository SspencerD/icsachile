@extends('layouts.app')

@section('title',' Quienes somos| '. config('app.name'))
@section('content')
@include('includes.menu')
<div class="container">
    <div class="jumbotron jumbotron-fluid " style="background-color:white">
        <div class="container">
            <h1 class="display-4 text-center">Quienes somos</h1>
        </div>
    </div>
    <div class="row">
        <div class="wwd">
            <h1 class="display-5 text-center">Nuestra empresa</h1>
            <div class="col-sm-5"><img class="img-responsive" src="{{ url('image/corchera.png')}}" alt="#"></div>
            <div class="col-md-7">
                <h2 class="text-center">Historia breve de como comenzó todo</h2>
            </div>
            <div class="col md 8">
                <p style="font-size:20 ">
                    Su fundación se lleva acabo, el 01 enero 1943 en el transcurso del tiempo ICSA se ha preocupado
                    de satisfacer las diferentes necesidades del mercado y a su vez adaptarse a los fuertes y
                    distintos cambios que éste ha ido sufriendo en los últimos años. En el año 2000 se incorpora el
                    Grupo AMORIM, siendo esta empresa una de las mas importantes en el elaboración y fabricación de
                    corchos. Donde ha demostrado en el transcurso de los años ser la empresa de mayor innovación e
                    investigación, respecto a todo lo relacionado con los últimos avances aplicados a las materias
                    primas para corchos naturales y tecnicos: Trazabilidad de Cosechas, Cocimientos Convex, INOS II,
                    ROSA, ROSA Hi-Tech, Vaporización Planchas, ROSA EVO y NDTech, todos estos procesos acumulativos
                    orientados para poder ofrecer que un corcho natural o técnico logren la mayor seguridad
                    sensorial Grandes avances en los tratamientos de superficie de ultima generación, todos estos
                    desarrollos como objetivo común de lograr la estanqueidad en el tiempo
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="card-group">
        <div class="card" >
            <img class="card-img-top" src="{{ url('image/ifs.png') }}" alt="">
            <div class="card-body">
                <h2 class="card-title">Corchera dispone todos los estándares de seguridad, calidad y legalidad</h2>
                <p class="card-text" style="font-size:15">Dentro de nuestro afán de ser la mejor empresa que entrega productos de
                    envasado para productos vitivinicolas, fuimos mas allá y nos certificamos con unas de las
                    certificaciónes mas rigurosas.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="card">
            <img class="card-img-top" src="{{ url('image/ecofriendly.png') }}" alt="">
            <div class="card-body">
                <h2 class="card-title">Amigables al medio Ambiente</h2>
                <p class="card-text" style="font-size:15">Intentamos en lo mayor posible de cuidar nuestro medio ambiente, utilizamos
                    productos ecologicos y sustentables en la mayoria de nuestros procesos y nuestros productos son
                    de calidad alimentaria.</p>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    @include('includes.footer')
</div>
