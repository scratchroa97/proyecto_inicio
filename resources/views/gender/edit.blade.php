@extends('adminlte::page')

@section('title', 'Gender')

@section('content_header')
<h1>Genders</h1>
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
                    <h2 class="text-center">Editar Gender</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('battery.update', $battery->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <strong>Tipo de Gender</strong>
                            <input type="text" name="gender_name" id="gender_name" class="form-control"
                                value="{{ $gender_name['gender_name'] }}">
                            <small>El gender se guarda por nombre.</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('gender.index') }}" class="btn btn-warning">Cancelar</a>
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