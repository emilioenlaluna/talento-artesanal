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
    <hr class="my-4">

    <div class="container">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            @foreach ($viewData["lecciones"] as $leccion)
                <div class="card">
                    <div class="card-header">
                        {{$leccion["NombreLeccion"]}}
                    </div>
                    <div class="card-body">
                        <h5>{{$leccion["NombreLeccion"]}}</h5>
                        <p>{{$leccion["FechaLeccion"]}}</p>
                        <p>{{$leccion["Detalles"]}}</p>
                        <a  class="btn btn-dark" href="{{route('admin.cursos.material',['id'=>$leccion["idLeccion"]])}}">Ver Contenido Leccion</a>
                    </div>
                </div>
                <hr class="my-4">
            @endforeach
        </div>
    </div>
    
    
    <hr class="my-4">
    
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <div class="card mb-4">
                                <div class="card-header">
                                    Crear leccion para el Curso
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{route('admin.guardarleccion')}}">
                                        @csrf
                                        <input type="hidden" name="curso" value="{{$viewData["idCurso"]}}">
                                        <label class="form-label">Nombre Lección</label>
                                        <input type="text" class="form-control" name="nombre">
                                        <label class="form-label">Detalles</label>
                                        <input type="text" name="detalles" class="form-control">
                                        <br>
                                        <button type="submit" class="btn btn-dark">Crear</button>
                                    </form>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->


    

@endsection





