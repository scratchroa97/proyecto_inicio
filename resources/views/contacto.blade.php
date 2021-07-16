@extends('layouts.pages')
@section('title')
<h1 class="text-center">Página de contacto </h1>
@endsection
@section('content')
<style>
    .mapa {
        width: 100%;
        height: 200px;
        padding: 2%;
        padding-left: 5%;
        padding-right: 5%;
    }

    .tittle {
        text-align: center ; color: #007bff ;
        font-size: 2.5rem ; 

    }

    .imag {
        width: 100%;
        height: 230px;
        padding: 2%;
    }

    .infopag {
        text-align: center;
        justify-content: center;
    }

    .formcontact {
        text-align: center; background-image: url(../img/contactofor.png) ; 
    }

    .comentariouser{height: 100px;
        text-align: initial;
    }
    .cuerpo{
        background: rgb(219, 219, 219); 
    }
    .formu{
        border-color: rgb(0, 0, 0); border-style: double;padding: 1%;
    }
    .imgredes{
        width: "200px" ; height:"200px" ;
    }
</style>

    <h1 class="tittle">Nuestro equipo se pondra en contacto contigo</h1><br>
    <div class="container">
        <img class="imag" src="{{asset('uploads/img/plantilla.jpg')}}" alt="">
    </div><br>
    <div class="container formcontact">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-4 col-sm-3 formu">
                <form class="form-grou">
                    <div class="form-group">
                        <label for="Namecontacto" class="tittleform"><strong>Nombres</strong></label>
                        <input type="text" placeholder="Dijite sus nombres" class="form-control" id="namecontacto">
                        <label for="Apellidocontacto" class="tittleform"><strong>Apellidos</strong></label>
                        <input type="text" placeholder="Dijite sus apellidos" class="form-control" id="surnamecontcato">
                        <label for="Correocontacto" class="tittleform"><strong>Correo Electronico</strong></label>
                        <input type="email" class="form-control" id="emailcontacto" placeholder="Dijite su E-mail">
                        <label for="Telefonocontacto" class="tittleform"><strong>Telefono Contacto</strong></label>
                        <input type="number" class="form-control" id="telcontacto"
                            placeholder="Dijite su N° telefonico">
                        <label for="Comentarios" class="tittleform"><strong>Comentarios</strong></label>
                        <input type="text" size="320" class="form-control comentariouser" id="comentarioscontacto"
                            placeholder="Deje aca sus comentarios e inquietudes por favor">
                    </div>
                    <button type="submit" class="btn btn-primary"><strong>Enviar</strong></button>
                </form>
            </div>
            <div class="infopag col-xl-6 col-lg-4 col-md-2">
                <a href="https://www.facebook.com/" target="_blank "><img class="imgredes" src="{{asset('uploads/img/redespagcel.jpg')}}" alt=""></a>
                <br><br><p>Bogotá, Calle 123&nbsp;#&nbsp;45-123 CO</p>
                <p>celphone@example.com</p>
                <p>+ 01 234 567 88</p>
                <p>+ 57 313 365 3643</p>
                <a href="https://www.whatsapp.com/?lang=es" target="_blank" ><img width="70px" height="70px" src="{{asset('uploads/img/iconwhatsapp.jpg')}}" >Asesoria inmediata</a>
            </div>
        </div>

    </div>
    <div class="container">
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.396670212738!2d-74.03856368590985!3d4.700952342965951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aac03bdca95%3A0xddd590f0297d09f9!2sCl.%20123%20%2345a11%2C%20Bogot%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1626231033807!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection