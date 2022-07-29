@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="container my-4">

        @guest
            <a href="{{route('login')}}">Inicie Sesión para Contar su Historia</a>
        @else
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{route('historias.contarHistoria')}}" enctype="multipart/form-data">
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
                                               class="col-md-auto col-form-label">Url Imagen:</label>
                                        <div class="col">
                                            <input name="url"
                                                      id="url" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                <textarea class="form-control" id="summernote" name="contenido" style=".note-group-select-from-files {display: none;}"></textarea>
                <br>

                            <div class="row">
                                <button type="submit" class="btn btn-success col" style=" font-size: large;"><b>Publicar Mi Historia</b></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        @endguest

        <hr class="my-4">
        @foreach ($historias as $historia)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$historia->url}}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $historia->titulo }}
                        </h5>
                        <p class="card-text">{{ $historia->fecha }}</p>
                        <p class="card-text">
                    <form>
                            <div class="row">
                                @csrf
                                <div class="col-auto">
                                    <a href="{{ route('historias.historiaDetalles', ['id'=> $historia->id]) }}"
                                        class="btn bg-primary text-white">Ver Historia Completa</a>
                                </div>
                            </div>
                        </form>
                        </p>

                    </div>
                </div>
            </div>
        </div>

            <hr class="my-4">
        @endforeach
        <hr class="my-4">
        @if(!empty($historias))
                <div class="d-flex justify-content-center" style="margin-top: 3vh"> {{ $historias->links() }} </div>
        @endif
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
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
