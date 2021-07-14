@extends('layouts.pages')
@section('content')


<!-- Carrusel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 500px;">
            <img src="https://pbs.twimg.com/media/EEHMp2DU8AIsuTe.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color: rgb(136, 136, 136)">Accesorios</h5>
                <p style="color: rgb(136, 136, 136)">Conoce todos nuestra linea de accesorios para tu móvil.
                </p>
            </div>
        </div>
        <div class="carousel-item" style="height: 500px">
            <img src="https://surflorida.com/wp-content/uploads/2021/02/mejores-celulares-2018.jpg"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Celulares</h5>
                <p>Conoce los diferentes móviles al mejor precio del mercado.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- End Carrusel -->


<div class="jumbotron col-md-12">
    <h1 class="text-center">Productos con descuento</h1>
    <p class="text-center">Estos son algunos de los descuentos que tenemos en el momento desde el 10% hasta
        el 25%</p>
</div>


@foreach($phones as $phone)
<div class="card col-sm-12 col-md-4 col-lg-3">
    <img src="{{asset('uploads/phones/'.$phone->foto)}}" class="card-img-top" alt="Se supone que va la imagen"
        width="200px" height="200px">
    <div class="card-body text-center">
        <h5 class="card-title">{{ucfirst(strtolower($phone->phone_name))}}</h5>
        <p class="card-text">${{number_format($phone->precio)}}</p>
        <a href="#" class="btn btn-primary">¡Lo quiero!</a>
    </div>
</div>
@endforeach


</div>
@endsection