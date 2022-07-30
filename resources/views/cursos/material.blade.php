@extends('layouts.app')
@section('contenido')
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

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

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
    <!-- end products -->
@endsection
