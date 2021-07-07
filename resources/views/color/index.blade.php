@extends('adminlte::page')

@section('title', 'Colors')


@section('content_header')
<h1>Colores <a href="{{ route('color.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a></h1>
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
                    <h2>Listado de colores</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Tipo color</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($colores as $color)
                            <tr>
                                <td>{{ $color['id']}}</td>
                                <td>{{ $color['color_name']}}</td>
                                <td>
                                    <form action="{{ route('color.destroy',$color->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                            href="{{ route('color.edit',$color->id) }}">Editar</a>
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