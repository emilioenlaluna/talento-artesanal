@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">
        @foreach ($viewData["curso"] as $curso)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $curso->imagenUrl}}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                 {{ $curso->NombreCurso }}
                            </h5>
                            <p class="card-text">{{ $curso->detalles }}</p>
                            <p class="card-text">
                            {{--                    <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->idCurso]) }}">--}}
                            <form>
                                <div class="row">
                                    @csrf
                                    <div class="col-auto">
                                        <a class="btn bg-primary text-white" href="{{ route('cursos.leccion',['id'=>$curso->idCurso])}}">
                                            Ir a Contenido
                                        </a>
                                    </div>
                                    @guest
                                        <div class="col-auto">
                                            <a class="btn bg-primary text-white" href="{{ route('login') }}">Inicie
                                                Sesión para guardarlo en mi Cursos
                                            </a>
                                        </div>
                                        
                                    @else
                                        @admin
                                            <a href="{{ route('admin.cursos') }}">Ir a mis Cursos</a>
                                        @endadmin
                                        @usuario
                                        <a  class="btn btn-info" href="{{ route('usuario.inscribir',['id'=>$curso->idCurso])}}">Guardar en Mis Cursos</a>
                                        @endusuario
                                    @endguest

                                    @if($errors->any())
                                        <ul class="alert alert-danger list-unstyled">
                                            @foreach($errors->all() as $error)
                                                <li>- {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </div>
                            </form>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
