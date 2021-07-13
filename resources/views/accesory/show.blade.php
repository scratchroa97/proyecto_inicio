@extends('adminlte::page')

@section('title', 'Accesorios')

@section('content_header')
<h1>Accesorios &rAarr; {{$accesory->name}}</h1>
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
                    <h2 class="text-center">Detalles del producto</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{asset('uploads/accesories/'.$accesory->foto)}}" alt="" height="200px">
                        </div>
                        <div class="col-md-4">
                            <p><strong>SKU</strong><br> {{$accesory->sku}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Color</strong><br> {{$accesory->color_id}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Condición del producto</strong><br> {{$accesory->condition}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Modelo</strong><br> {{$accesory->model}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Garantía del producto</strong><br>
                                {{($accesory->warranty < 2) ? $accesory->warranty.' mes.' : $accesory->warranty.' meses.'}}
                                La garantía del
                                producto solo es válida por defectos de fábrica no por el uso inadecuado del mismo.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Garantía del producto en meses</strong><br> {{$accesory->warranty}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Pais de origen</strong><br> {{$accesory->country}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Peso</strong><br> {{$accesory->weight}} Kg</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-right pr-5">
                        <a href="{{route('accesory.index')}}" class="btn btn-sm btn-warning">Volver</a>
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