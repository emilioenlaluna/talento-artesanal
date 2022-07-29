@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('contenido')


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Multiples Temáticas</p>
                    <h1>Categorías</h1>
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
            @foreach ($categorias as $categoria)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{$categoria->url}}" alt=""></a>
                    </div>
                    <h3>{{ $categoria->NombreCategoria }}</h3>
                    <a href="{{ route('cursos.cursoscategoria', ['id'=> $categoria->idCategoria]) }}" class="cart-btn"><i class="fa fa-info"></i>Ver Cursos de Categoría</a>
                </div>
            </div>
            @endforeach
            
            
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    @if(!empty($categorias))
                    {{ $categorias->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end products -->

   

@endsection
