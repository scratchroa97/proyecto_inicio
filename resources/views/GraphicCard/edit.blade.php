@extends('adminlte::page')

@section('title', 'GraphicCard')

@section('content_header')
<h1>Graphic Card</h1>
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
                    <h2 class="text-center">Editar Graphic Card</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('graphicCard.update', $graphicCard->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Nombre de graphic Card</strong>
                            <input type="text" name="graphicname" id="graphicname" class="form-control"
                                value="{{ $brand['brand_name'] }}">
                        </div>
                        <div class="form-group">
                            <strong>Description de graphic Card</strong>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('graphicCard.index') }}" class="btn btn-warning">Cancelar</a>
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