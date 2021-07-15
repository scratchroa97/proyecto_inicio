@extends('adminlte::page')

@section('title', 'Colores')

@section('content_header')
<h1>Colores</h1>
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
                    <h2 class="text-center">Editar color</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('color.update', $color->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Nombre</strong>
                            <input type="text" name="nombreColor" id="nombreColor" class="form-control"
                                value="{{ $color['color_name'] }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('color.index') }}" class="btn btn-warning">Cancelar</a>
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