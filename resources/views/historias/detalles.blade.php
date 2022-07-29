@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('subtitulo', $viewData["subtitulo"])
@section('contenido')

    <div class="container my-4">
        <h2 class="display-3">Una historia de Éxito</h2>

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
