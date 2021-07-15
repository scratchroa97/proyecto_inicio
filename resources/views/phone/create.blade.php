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
                    <form action="{{ route('phone.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Nombre</strong>
                                    <input type="text" name="phone_name" id="phone_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Modelo</strong>
                                    <input type="text" name="phone_model" id="phone_model" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Precio</strong>
                                    <input type="number" name="precio" id="precio" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Slot SD</strong>
                                    <select name="sd_slot" id="sd_slot" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Dual SIM</strong>
                                    <select name="dual_sim" id="dual_sim" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Carga rápida</strong>
                                    <select name="fast_charge" id="fast_charge" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Color</strong>
                                    <select name="color_id" id="color_id" class="form-control">
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
                                    <select name="brand_id" id="brand_id" class="form-control">
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
                                    <select name="screen_id" id="screen_id" class="form-control">
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
                                    <select name="ram_memory_id" id="ram_memory_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($rams as $ram)
                                        <option value="{{$ram->id}}">{{$ram->ram_capacity}} GB</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>ROM</strong>
                                    <select name="rom_memory_id" id="rom_memory_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($roms as $rom)
                                        <option value="{{$rom->id}}">{{$rom->rom_capacity}} GB</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Capacidad batería</strong>
                                    <select name="battery_id" id="battery_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($baterias as $bateria)
                                        <option value="{{$bateria->id}}">{{$bateria->capacity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Procesador</strong>
                                    <select name="processor_id" id="processor_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($procesadores as $procesador)
                                        <option value="{{$procesador->id}}">{{$procesador->processor_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Gráficos</strong>
                                    <select name="graphic_card_id" id="graphic_card_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($graficos as $grafico)
                                        <option value="{{$grafico->id}}">{{$grafico->graphic_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>SO</strong>
                                    <select name="operating_system_id" id="operating_system_id" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        @foreach($ops as $op)
                                        <option value="{{$op->id}}">{{$op->os_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Seleccione imagen</strong>
                                    <input type="file" name="foto" id="foto" class="form-control">
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