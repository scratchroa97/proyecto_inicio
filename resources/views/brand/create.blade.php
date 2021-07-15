@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
<h1>Marcas</h1>
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
                    <h2 class="text-center">Crear marca</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="POST" class="form-row">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Nombre</strong>
                                <input type="text" name="nombreBrand" id="nombreBrand" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Categoría</strong>
                                <select name="typeBrand" id="typeBrand" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="accesorio">Accesorio</option>
                                    <option value="celular">Celular</option>
                                    <option value="ambos">Accesorio y Celular</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Crear</button>
                            <a href="{{ route('brand.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    </form>
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