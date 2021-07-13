@extends('adminlte::page')

@section('title', 'Teléfonos')

@section('content_header')
<h1>Teléfonos &rAarr; {{$phone->phone_name}}</h1>
@stop

@section('content')
<div class="container">
    @if ($errors->any())
    <p>Hay errores!</p>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Detalles</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{asset('uploads/phones/'.$phone->foto)}}" alt="" srcset="">
                        </div>
                        <div class="col-md-4">
                            <p><strong>Nombre:</strong> {{$phone->phone_name}}</p>
                            <p><strong>Modelo:</strong> {{$phone->phone_model}}</p>
                            <p><strong>Slot SD:</strong> {{($phone->slot_sd == 1) ? "Si" : "No"}}</p>
                            <p><strong>Dual SIM:</strong> {{($phone->dual_sim == 1) ? "Si" : "No"}}</p>
                            <p><strong>Carga rápida:</strong> {{($phone->fast_charge == 1) ? "Si" : "No"}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Color:</strong> {{$phone->getColor->color_name}}</p>
                            <p><strong>Marca:</strong> {{$phone->getBrand->brand_name}}</p>
                            <p><strong>Tamaño pantalla:</strong> {{$phone->getScreen->inches}}</p>
                            <p><strong>Memoria RAM:</strong> {{$phone->getRam->ram_capacity}}</p>
                            <p><strong>Memoria ROM:</strong> {{$phone->getRom->rom_capacity}}</p>
                        </div>

                        <div class="col-md-4">
                            <p><strong>Capacidad Batería:</strong> {{$phone->getBattery->capacity}}</p>
                            <p><strong>Tamaño pantalla:</strong> {{$phone->getProcessor->processor_name}}</p>
                            <p><strong>Tarjeta Gráfica:</strong> {{$phone->getGraphic->graphic_name}}</p>
                            <p><strong>Sistema Operativo:</strong> {{$phone->getOS->os_name}}</p>
                        </div>
                        <div class="col-md-12 text-right pr-5">
                            <a href="{{route('phone.index')}}" class="btn btn-sm btn-warning">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop