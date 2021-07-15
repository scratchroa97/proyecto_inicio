@extends('adminlte::page')

@section('title', 'Ram')

@section('content_header')
<h1>Memoría RAM</h1>
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
                    <h2 class="text-center">Crear Memoeria RAM</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('ram.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <strong>Capacidad de la Memoria RAM</strong>
                            <input type="text" name="capacidad" id="capacidad" class="form-control">
                            <small>Capacidad en GB.</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Crear</button>
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