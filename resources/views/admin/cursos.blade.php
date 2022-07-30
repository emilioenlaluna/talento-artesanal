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


    <div class="product-section mt-150 mb-150">
        <div class="container">



            <div class="row product-lists">
                @foreach ($viewData['cursos'] as $curso)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('admin.cursos.leccion', ['id' => $curso['idCurso']]) }}"><img
                                        src="{{ $curso['imagenUrl'] }}" alt=""></a>
                            </div>
                            <h3>{{ $curso['NombreCurso'] }}</h3>
                            <p class="product-price"><span>Descripción:</span> {{ $curso['detalles'] }} </p>
                            <a href="{{ route('admin.cursos.leccion', ['id' => $curso['idCurso']]) }}" class="cart-btn"><i
                                    class="fa fa-info"></i> Ir a Curso</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
    <!-- end products -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <h3 class="display-3 text-white">Crear Curso</h3>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <div class="card mb-4">
                            <div class="card-header">
                                Crear Curso
                            </div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('admin.cursos.guardar') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col">

                                            <label for="name">Nombre Curso:</label>

                                            <input name="name" id="name" type="text" class="form-control"
                                                required>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">

                                            <label for="detalles">Detalles:</label>

                                            <input name="detalles" id="detalles" type="text" class="form-control"
                                                required>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">

                                            <label for="detalles">Visible:</label>

                                            <select class="form-control" name="visible">
                                                <option>** Seleccione Opción **</option>
                                                <option value="1">Público</option>
                                                <option value="0">Privado</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">

                                            <label for="url">Url
                                                Imagen:</label>

                                            <input name="url" id="url" type="text" class="form-control"
                                                required>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">

                                            <label for="url">Categoria:</label>

                                            <select class="form-control" name="categoria">
                                                <option>** Seleccione Categoria **</option>
                                                <option value=1>Artesanias</option>
                                                <option value=2>Administración</option>
                                                <option value=3>Como Usar Etsy</option>
                                                <option value=4>Otros Tutoriales</option>
                                            </select>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear</button>
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
