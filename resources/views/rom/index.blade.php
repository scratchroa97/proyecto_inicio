@extends('adminlte::page')

@section('title', 'Memoria rom')


@section('content_header')
<h3>Memorías rom</h3>
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
                    <a href="{{ route('rom.create') }}" class="btn btn-success btn-sm float-right"><i
                            class="fa fa-plus"></i> Nueva</a>
                    <h2>Listado de Memorias rom</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Capacidad</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($rom as $rom)
                            <tr>
                                <td>{{ $rom->id}}</td>
                                <td>{{ $rom->rom_capacity}}</td>
                                <td>
                                    <form action="{{ route('rom.destroy',$rom->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('rom.edit',$rom->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" id="btnEliminar"
                                            onclick="eliminar();">Eliminar</button>
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



@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
function eliminar() {
    Swal.fire({
        title: '¿Está seguro?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Eliminado!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}
</script>
@stop