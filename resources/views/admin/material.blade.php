@extends('layouts.app')
@section('contenido')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Contenido del curso.</p>
                        <h1>Material de la lección</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <hr class="my-4">

    <div class="container">
        <div>
            @foreach ($viewData['material'] as $material)
                <div class="card">
                    <div class="card-header">
                        {{ $material['titulo'] }}
                    </div>
                    <div class="card-body">
                        @php echo html_entity_decode ($material["contenido"]) @endphp
                        <hr class="my-4">
                        <p>{{ $material['fecha'] }}</p>
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
                                Crear Material
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.leccion.guardarmaterial') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="idleccion" value="{{ $viewData['idleccion'] }}">
                                    <label class="form-label">Titulo</label>
                                    <input type="text" class="form-control" name="titulo">
                                    <br>
                                    <textarea class="form-control" id="summernote" name="contenido" style=".note-group-select-from-files {display: none;}"></textarea>
                                    <br><button type="submit" class="btn btn-primary">Crear</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->


    <script>
        $('#summernote').summernote({
            placeholder: 'Escribe el contenido Aquí',
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
    <style>
        .note-modal-backdrop{
           display:none !important;
           }
       </style>
@endsection
