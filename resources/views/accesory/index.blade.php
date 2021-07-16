@extends('adminlte::page')

@section('title', 'Accesorios')


@section('content_header')
<h1>Accesorios <a href="{{ route('accesory.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
</h1>
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
                    <h2>Listado de accesorios</h2>
                </div>
                <div class="card-body">
                    <div class="row">

                        @foreach($accesories as $accesory)
                        <div class="card col-sm-12 col-md-4 col-lg-3">
                            <img src="{{asset('uploads/accesories/'.$accesory->foto)}}" class="card-img-top"
                                alt="Se supone que va la imagen" width="200px" height="200px">
                            <div class="card-body text-center">
                                <h5 class="text-center">{{ucfirst(strtolower($accesory->name))}}</h5>
                                <p class="card-text">${{number_format($accesory->price)}}</p>
                            </div>
                            <div class="pb-2">
                                <form action="{{route('accesory.destroy', $accesory->id)}}" method="POST"
                                    class="text-center">
                                    <a class="btn btn-sm btn-info" href="{{ route('accesory.show',$accesory->id) }}"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('accesory.edit', $accesory->id) }}"><i class="fa fa-pen"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" id="btnEliminar"
                                        onclick="eliminar();"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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