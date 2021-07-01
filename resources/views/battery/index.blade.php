@extends('adminlte::page')

@section('title', 'Baterías')

@section('content_header')
<h1>Baterías <a href="{{ route('battery.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a></h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h2>Listado de baterías</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Capacidad</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($baterias as $bateria)
                            <tr>
                                <td>{{ $bateria['id']}}</td>
                                <td>{{ $bateria['capacity']}}</td>
                                <td>
                                    <form action="{{ route('battery.destroy',$bateria->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                            href="{{ route('battery.edit',$bateria->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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