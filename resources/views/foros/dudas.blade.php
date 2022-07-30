@extends('layouts.app')
@section('titulo', $viewData['titulo'])
@section('subtitulo', $viewData['subtitulo'])
@section('contenido')

    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Ayuda y déjate</p>
                        <h1>Foros</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="my-4">

    <!-- products -->

    <div class="container">

        @foreach ($dudas as $duda)
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <h6 class="display-6"><strong>{{ $duda->titulo }}</strong></h6>
                        <p>{{ $duda->fecha }}</p>
                        <a href="{{ route('foros.duda', ['id' => $duda->id]) }}" class="cart-btn">Ver
                            Respuestas</a>
                    </div>
                </div>
            </div>




            <hr class="my-4">
        @endforeach

        <hr class="my-4">




        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    @if (!empty($dudas))
                        {{ $dudas->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- end products -->

    <hr class="my-4">



    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h4 class="display-4">Agrega tu pregunta...</h4>
                        @guest
                            <a href="{{ route('login') }}">Inicie Sesión para Hacer Preguntas</a>
                        @else
                            <div class="row">
                                <div class="card">

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('foros.preguntar') }}">
                                            @csrf

                                            <div class="row row-cols-1 row-cols-sm-2">
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label for="titulo" class="col-md-auto col-form-label">
                                                            Titulo:</label>
                                                        <div class="col">
                                                            <input name="titulo" id="titulo" type="text"
                                                                class="form-control" required maxlength="45">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label for="mensaje"
                                                            class="col-md-auto col-form-label">Mensaje:</label>
                                                        <div class="col">
                                                            <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <button type="submit" class="btn btn-success col"
                                                    style=" font-size: large;"><b>Crear</b></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
