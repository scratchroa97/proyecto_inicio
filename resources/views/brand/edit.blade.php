@extends('adminlte::page')

@section('title', 'Baterías')

@section('content_header')
<h1>Brand</h1>
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
                    <h2 class="text-center">Editar Brand</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.update', $brand->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Nombre del Brands</strong>
                            <input type="text" name="nombreBrand" id="nombreBrand" class="form-control"
                                value="{{ $brand['brand_name'] }}">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <strong>Tipo del Brands</strong>
                                <select name="typeBrand" id="typeBrand" class="form-control">
                                    <option value="">Seleccione una opción</option>
                                    <option value="celular">celular</option>
                                    <option value="accesorio">accesorio</option>
                                    <option value="ambos">ambos</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
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