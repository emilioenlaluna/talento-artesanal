@extends('layouts.app')
@section('contenido')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>¿Tienes alguna pregunta?</p>
                        <h1>Contactanos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Envianos un correo</h2>
                        <p>Llena los siguientes campos para ponerte en contacto con nosotros y nos contactaremos contigo lo
                            más pronto posible.</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <p>
                                <input type="text" placeholder="Nombre" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Telefono" name="phone" id="phone">
                                <input type="text" placeholder="Asunto" name="subject" id="subject">
                            </p>
                            <p>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            </p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <p><input type="submit" value="Enviar"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-blog"></i> Sitio Oficial</h4>
                            <u><a href="https://www.etsy.com/" style="color:#051922 ;">Compra a todo el mundo en
                                    Etsy</a></u>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-mobile-alt"></i> Aplicación Etsy</h4>
                            <u><a href="https://etsy.app.link/d7nDUdp49V" style="color:#051922 ;">Descarga la aplicación
                                    oficial de Etsy</a></u>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contactos</h4>
                            <p>Telefono: +52 551 222 3333 <br> Email: support@etsy.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

@endsection
