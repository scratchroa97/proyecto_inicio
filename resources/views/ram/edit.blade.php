@extends('adminlte::page')

@section('title', 'Memoria RAM')

@section('content_header')
<h1>Memorias RAM</h1>
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
                    <h2 class="text-center">Memoria RAM - {{ $ram->ram_capacity}} GB</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('ram.update', $ram->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Capacidad de la memoria RAM</strong>
                            <input type="text" name="capacidad" id="capacidad" class="form-control"
                                value="{{ $ram->ram_capacity }}">
                            <small>Capacidad en GB.</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('ram.index') }}" class="btn btn-warning">Cancelar</a>
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