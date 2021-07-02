@extends('adminlte::page')

@section('title', 'Teléfonos')

@section('content_header')
<h1>Teléfonos</h1>
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
                    <h2 class="text-center">Crear teléfono</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('phone.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Nombre</strong>
                                    <input type="text" name="capacidad" id="capacidad" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <strong>Modelo</strong>
                                    <input type="text" name="capacidad" id="capacidad" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Slot SD</strong>
                                    <select name="slot_sd" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">Si</option>
                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Dual SIM</strong>
                                    <select name="dual_sim" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">Si</option>
                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Carga rápida</strong>
                                    <select name="fast_charge" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">Si</option>
                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Color</strong>
                                    <select name="id_color" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($colores as $color)
                                        <option value="{{$color->id}}">{{$color->color_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Marca</strong>
                                    <select name="id_brand" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($marcas as $marca)
                                        <option value="{{$marca->id}}">{{$marca->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Tamaño pantalla</strong>
                                    <select name="id_screen" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($pantallas as $pantalla)
                                        <option value="{{$pantalla->id}}">{{$pantalla->inches}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <h5 class="col-sm-12 col-md-12"><strong>Especificaciones técnicas</strong></h5>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>RAM</strong>
                                    <select name="id_ram_memory" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">4 GB</option>
                                        <option value="false">6 GB</option>
                                        <option value="false">8 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>ROM</strong>
                                    <select name="id_rom_memory" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">32 GB</option>
                                        <option value="false">64 GB</option>
                                        <option value="false">128 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Capacidad batería</strong>
                                    <select name="id_battery" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">32 GB</option>
                                        <option value="false">64 GB</option>
                                        <option value="false">128 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Procesador</strong>
                                    <select name="id_processor" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">32 GB</option>
                                        <option value="false">64 GB</option>
                                        <option value="false">128 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Gráficos</strong>
                                    <select name="id_processor" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">32 GB</option>
                                        <option value="false">64 GB</option>
                                        <option value="false">128 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>SO</strong>
                                    <select name="id_so" id="" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="true">Android</option>
                                        <option value="false">iOS</option>
                                        <option value="false">Windows Phone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <strong>Seleccione imagen</strong>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02"
                                            aria-describedby="inputGroupFileAddon02">Seleccionar foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Crear</button>
                            <a href="{{ route('phone.index') }}" class="btn btn-warning">Cancelar</a>
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