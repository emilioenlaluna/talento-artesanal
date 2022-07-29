@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('contenido')





        @foreach ($viewData["curso"] as $curso)

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Detalles del Curso</p>
                    <h1>{{ $curso->NombreCurso }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ $curso->imagenUrl}}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $curso->NombreCurso }}</h3>
                    <p>{{ $curso->detalles }}.</p>
                    <div class="single-product-form">
                        <form>
                            <div class="row">
                                @csrf
                                <div class="col-auto">
                                    <a  href="{{ route('cursos.leccion',['id'=>$curso->idCurso])}}" class="cart-btn"><i class="fa fa-info"></i>
                                        Ir a Contenido
                                    </a>
                                </div>
                                @guest
                                    <div class="col-auto">
                                        <a href="{{ route('login') }}" class="cart-btn">Inicie
                                            Sesión para guardarlo en mi Cursos<i class="fa fa-book"></i>
                                        </a>
                                    </div>
                                    
                                @else
                                    @admin
                                        <a href="{{ route('admin.cursos') }}" class="cart-btn">Ir a mis Cursos<i class="fa fa-book"></i></a>
                                    @endadmin
                                    @usuario
                                    <a  class="cart-btn" href="{{ route('usuario.inscribir',['id'=>$curso->idCurso])}}">Guardar en Mis Cursos <i class="fa fa-book"></i></a>
                                    @endusuario
                                @endguest

                                

                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        @endforeach
    

@endsection
