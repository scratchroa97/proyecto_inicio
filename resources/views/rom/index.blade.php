@extends('adminlte::page')

@section('title', 'Memorias ROM')


@section('content_header')
<h3>Memorias ROM <a href="{{ route('rom.create') }}" class="btn btn-success btn-xs "><i class="fa fa-plus"></i> </a>
</h3>
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
                <div class="card-header text-center">
                    <h2>Listado de memorias ROM</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark text-center">
                            <th>#</th>
                            <th>Capacidad</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($roms as $rom)
                            <tr class="text-center">
                                <td>{{ $rom->id}}</td>
                                <td>{{ $rom->rom_capacity}} GB</td>
                                <td>
                                    <form action="{{ route('rom.destroy',$rom->id) }}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="{{ route('rom.edit',$rom->id) }}"><i
                                                class="fa fa-pen"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" id="btnEliminar"
                                            onclick="eliminar();"><i class="fa fa-trash"></i></button>
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