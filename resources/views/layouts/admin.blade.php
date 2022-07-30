<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous"/>
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title', 'Talento Artesanal')</title>
</head>

<body>
<div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
        <a class="text-white text-decoration-none">
            <span class="fs-4">Administrador</span>
        </a>
        <hr/>
        <ul class="nav flex-column">
            <li><a  class="nav-link text-white">- Administrador- Gestion de Cuentas</a></li>
            <li><a href="{{route('admin.cursos')}}" class="nav-link text-white">- Administrador - Cursos</a></li>
            <li>
                <a class="mt-2 btn bg-primary text-white" href="{{route('home.index')}}">Regresar a la pagina principal</a>
            </li>
        </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
        <nav class="p-3 shadow text-end">
            <span class="profile-font">Administrador</span>
        </nav>

        <div class="g-0 m-5">
            @yield('content')
        </div>
    </div>
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
            >
                The Honey
            </a>
        </small>
    </div>
</div>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>

</html>

