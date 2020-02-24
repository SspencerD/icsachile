@extends('layouts.dashboard')
@section('contenido')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Bienvenido al sistema de gestión</h2>
            <p>Vamos a darle algunos retoques a algunos productos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-pallet fa-fw bg-primary"></i>
            <div class="info">
              <h3>{{$products->count()}}</h3> <span>  Productos</span>
              <p>Cantidad de productos</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-tasks fa-fw danger"></i>
            <div class="info">
              <h3>{{$categories->count()}}</h3> <span>  Categorias</span>
              <p>Cantidad de variedades</p>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-4">
          <div class="box">
            <i class="fa fa-users fa-fw success"></i>
            <div class="info">
              <h3>5,245</h3> <span>Users</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  {{-- <section class="charts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Chart</h3>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Chart2</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
</div>
 @endsection
