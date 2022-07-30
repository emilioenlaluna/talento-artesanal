@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Experiencias Reales</p>
                    <h1>Una Historia de Éxito</h1>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container my-4">
        @foreach($viewData["historia"] as $detalles)
            <div class="card">
                <div class="card-header">
                    Conozca esta historia...
                </div>
                <div class="card-title text-center">
                    <h6 class="display-4"><strong>{{ $detalles["titulo"] }}</strong></h6>
                </div>
                <div class="card-body">
                    @php echo html_entity_decode ($detalles["contenido"]) @endphp
                        <hr class="my-4">
                        <p>{{$detalles["fecha"]}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
