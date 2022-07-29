<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('/img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/barraNavegacionCursos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Cursos/misCursos.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos | Mi entrenador de aprendizaje</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</head>

<body>
<!-- barra de navegacion cursos -->

<header>
    <nav id="navP" class="navbar fixed-top navbar-expand-md navbar-dark scrolling-navbar"
         style="background-color: #01684A;">
        <div class="container-fluid">
            <a class="navbar-brand ">
                <img id="logo" src="{{ asset('/img/icon.png') }}" alt="Icono de la pagina"
                     class="d-inline-block align-text-center" style="margin-bottom: 3%;">
                <strong class="titulo">Mi entrenador de aprendizaje 📖</strong>
            </a>
            <button class="navbar-toggler collapsed" id="botonCollapse" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.cursos') }}">Cursos</a>
                    </li>
                </ul>
                <ul class="navbar-nav justyfy-content-end">
                    @admin
                    <a class="nav-link active" href="{!! url('/admin'); !!}">Administrador</a>
                    @endadmin
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- fin barra de navegacion cursos -->

<div style="padding-top: 80px;"></div>


<div class="container">
    <div class="card mb-4">
        <div class="card-header">
            Crear Material
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.leccion.guardarmaterial')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="idleccion" value="{{ $viewData["idleccion"] }}">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo">
                <br>
                <textarea class="form-control" id="summernote" name="contenido" style=".note-group-select-from-files {display: none;}"></textarea>
                <br><button type="submit" class="btn btn-primary">Crear</button>
            </form>

        </div>
    </div>
</div>


<div class="container">
    <h2 class="display-3">Material de la Lección</h2>
    <div>
        @foreach ($viewData["material"] as $material)
            <div class="card">
                <div class="card-header">
                    {{$material["titulo"]}}
                </div>
                <div class="card-body">
                    @php echo html_entity_decode ($material["contenido"]) @endphp
                    <hr class="my-4">
                    <p>{{$material["fecha"]}}</p>
                </div>
            </div>
            <hr class="my-4">
        @endforeach
    </div>
</div>


<hr class="my-4">


<!-- pie -->
<div id="piecito">
    <h8><b>CHICHARRON-TEK</b></h8>
</div>
<!-- fin del pie -->

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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src="{{ asset('js/jQuery/node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/barraNavegacion.js') }}" type="text/javascript"></script>
</body>

</html>
