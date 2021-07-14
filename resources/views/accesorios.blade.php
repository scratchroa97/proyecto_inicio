@extends('layouts.pages')

@section('content')
<!-- <div class="jumbotron col-md-12 text-white"
    style="background-image: url(https://surflorida.com/wp-content/uploads/2021/02/mejores-celulares-2018.jpg); background-size: 100% 100%; opacity: 0.8;">
    <h1 class="text-center">Celulares</h1>
    <p class="text-center">Aquí encontrarás los celulares que tenemos disponibles</p>
</div> -->
<!-- Carrusel -->

<div id="carouselExampleCaptions" class="carousel slide pb-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 300px">
            <img src="https://pbs.twimg.com/media/EEHMp2DU8AIsuTe.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Accesorios</h5>
                <p>Conoce todos nuestra linea de accesorios para tu móvil.</p>
            </div>
        </div>
    </div>
</div>

<!-- End Carrusel -->

<div class="col-md-12 pb-5">
    <form>
        <div class="form-row">
            <div class="col">
                <select type="text" class="form-control">
                    <option value="">Ordenar por precio</option>
                    <option value="">Mas barato a más costoso</option>
                    <option value="">Más costoso a más barato</option>
                </select>
            </div>
            <div class="col">
                <select type="text" class="form-control">
                    <option value="">Filtrar por marca</option>
                </select>
            </div>
        </div>
    </form>
</div>
@foreach($accesorios as $accesorio)
<div class="card col-sm-12 col-md-4 col-lg-3">
    <img src="{{asset('uploads/phones/'.$accesorio->foto)}}" class="card-img-top" alt="Se supone que va la imagen"
        width="200px" height="200px">
    <div class="card-body text-center">
        <h5 class="card-title">{{ucfirst(strtolower($accesorio->name))}}</h5>
        <p class="card-text">${{number_format($accesorio->precio)}}</p>
        <a href="#" class="btn btn-primary">¡Lo quiero!</a>
    </div>
</div>

@endforeach
@endsection