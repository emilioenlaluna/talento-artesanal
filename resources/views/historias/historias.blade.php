@extends('layouts.app')
@section('titulo', $viewData['titulo'])
@section('subtitulo', $viewData['subtitulo'])
@section('contenido')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Experiencias Reales</p>
                        <h1>Historias de Éxito</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="my-4">

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row product-lists">

                @foreach ($historias as $historia)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('historias.historiaDetalles', ['id' => $historia->id]) }}"><img
                                        src="{{ $historia->url }}" alt=""></a>
                            </div>
                            <h3>{{ $historia->titulo }}</h3>
                            <p class="product-price"><span>Fecha:</span> {{ $historia->fecha }}<i
                                    class="fas fa-calendar"></i> </p>
                            <a href="{{ route('historias.historiaDetalles', ['id' => $historia->id]) }}" class="cart-btn"><i
                                    class="fa fa-info"></i> Ver Historia Completa</a>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        @if (!empty($historias))
                            {{ $historias->links() }}
                        @endif
                    </div>
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
                        <h4 class="display-4">Agrega tu historia</h4>
                        @guest
                            <a href="{{ route('login') }}">Inicie Sesión para Contar su Historia</a>
                        @else
                            <div class="row">
                                <div class="card">

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('historias.contarHistoria') }}"
                                            enctype="multipart/form-data">
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
                                                        <label for="mensaje" class="col-md-auto col-form-label">Url
                                                            Imagen:</label>
                                                        <div class="col">
                                                            <input name="url" id="url" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <textarea class="form-control" id="summernote" name="contenido" style=".note-group-select-from-files {display: none;}"></textarea>
                                            <br>

                                            <div class="row">
                                                <button type="submit" class="btn btn-success col"
                                                    style=" font-size: large;"><b>Publicar Mi
                                                        Historia</b></button>
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














    <script>
        $('#summernote').summernote({
            placeholder: 'Escribe tu historia Aquí',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('div.note-group-select-from-files').remove();
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
