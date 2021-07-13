@extends('layouts.pages')

@section('content')
<div class="jumbotron col-md-12">
    <h1 class="text-center">Celulares</h1>
    <p class="text-center">Aquí encontrarás los celulares que tenemos disponibles</p>
</div>


@foreach($phones as $phone)
<div class="card col-sm-12 col-md-4 col-lg-3">
    <img src="{{asset('uploads/phones/'.$phone->foto)}}" class="card-img-top" alt="Se supone que va la imagen"
        width="200px" height="200px">
    <div class="card-body text-center">
        <h5 class="card-title">{{$phone->phone_name}}</h5>
        <p class="card-text">${{number_format($phone->precio)}}</p>
        <a href="#" class="btn btn-primary">¡Lo quiero!</a>
    </div>
</div>
@endforeach
@endsection