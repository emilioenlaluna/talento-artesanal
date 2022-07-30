@extends('layouts.app')
@section('contenido')


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Cursos en los que estoy inscrito</p>
                        <h1>Mis Cursos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row product-lists">
                @foreach ($viewData['cursosAlumno'] as $curso)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{ $curso['imagenUrl'] }}" alt=""></a>
                            </div>
                            <h3>{{ $curso['NombreCurso'] }}</h3>
                            <p class="product-price"><span>Descripción:</span> {{ $curso['detalles'] }} </p>
                            <a href="{{ route('cursos.leccion', ['id' => $curso['idCurso']]) }}" class="cart-btn"><i
                                    class="fa fa-info"></i> Ir a Curso</a>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        @if (!empty($cursos))
                            {{ $cursos->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->

@endsection
