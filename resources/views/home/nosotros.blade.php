@extends('layouts.app')
@section('contenido')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Hacemos que el comercio sea más humano</p>
                        <h1>Sobre Etsy</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">¿Por qué <span class="orange-text">elegir Etsy?</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Entrega a domicilio</h3>
                                        <p>Siempre nos aseguramos la entrega de tus producto hasta la puerta de los
                                            clientes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Precio-calidad</h3>
                                        <p>Ofrecemos los mejores precios de anuncio y buscando que siempre puedas
                                            maximizar tus ganancias.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Amplía tu negocio en Etsy</h3>
                                        <p>Tenemos muchos recursos para ayudarte a llevar tu negocio al siguiente nivel
                                            .Obten más información sobre <a
                                                href="https://www.etsy.com/seller-handbook/article/the-ultimate-guide-to-starting-an-etsy/838957668224"
                                                target="_blank" rel="noopener noreferrer">cómo vender en Etsy</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Protejemos a nuestros vendedores</h3>
                                        <p>La <a href="https://help.etsy.com/hc/es/articles/360000344188?segment=selling"
                                                target="_blank" rel="noopener noreferrer"></a>protección al vendedor de
                                            Etsy ofrece asistencia a los vendedores
                                            pertinentes en caso de disputa con un comprador. Protejemos tus ingresos de
                                            forma justa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->

    <!-- shop banner -->
    <section class="cart-banner pt-4 pb-4">
    </section>
    <!-- end shop banner -->

    <!-- team section -->
    <div class="mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>Cómo <span class="orange-text">trabajamos</span></h3>
                        <p>Nuestro mercado internacional es una comunidad vibrante de personas como tú que conectan
                            mediante productos especiales. La plataforma empodera a los vendedores para hacer lo que más
                            les gusta y ayuda a los compradores a encontrar lo que desean.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-100">
                <img src="{{ asset('/img/equipo.jpg') }}" alt="trabajo en equipo" width="400" height="400"
                    style="border-radius: 10px;">
            </div>
        </div>
    </div>
    <!-- end team section -->F
@endsection
