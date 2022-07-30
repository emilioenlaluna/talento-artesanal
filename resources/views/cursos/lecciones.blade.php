@extends('layouts.app')
@section('contenido')


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Cada Curso se divide en lecciones.</p>
                        <h1>Lecciones del Curso</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            @foreach ($viewData["lecciones"] as $leccion)
            <div class="card">
                <div class="card-header">
                    {{$leccion["NombreLeccion"]}}
                </div>
                <div class="card-body">
                    <h5>{{$leccion["NombreLeccion"]}}</h5>
                    <p>{{$leccion["FechaLeccion"]}}</p>
                    <p>{{$leccion["Detalles"]}}</p>
                    <a  class="btn btn-dark" href="{{route('cursos.material',['id'=>$leccion["idLeccion"]])}}">Ver Contenido Leccion</a>
                </div>
            </div>
            <hr class="my-4">
        @endforeach

        </div>
    </div>
    <!-- end products -->

@endsection

