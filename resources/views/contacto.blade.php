@extends('layout.layout')

@section('content')

{{-- Page Header --}}
<header class="masthead" style="background-image: url({{ asset('img/contact-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading" style="text-shadow: 2px 2px 5px black">
                    <h2>Contactame !</h2>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Main Content --}}
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p class="nunito">¿Querés ponerte en contacto conmigo para que te envíe los demás capitulos, dejar un saludo o bien amenazarme de muerte? Podés enviarme un mensaje privado a través de mi página en facebook, instragram, twitter o bien podés llenar el siguiente formulario y dejarme un mensaje, y te responderé a la mayor brevedad posible.</p>
            {{--
            Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work.
            WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address!
            To use the contact form, your site must be on a live web host with PHP! The form will not work locally!
            --}}
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresá tu nombre.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor ingresá tu email.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor ingresá tu mensaje."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components/iralinicio')

@endsection
