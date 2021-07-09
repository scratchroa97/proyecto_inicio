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
                    <h2 class="text-center">Editar teléfono</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('phone.update', $phone->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Nombre</strong>
                                    <input type="text" name="phone_name" id="phone_name" class="form-control"
                                        value="{{$phone->phone_name}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Modelo</strong>
                                    <input type="text" name="phone_model" id="phone_model" class="form-control"
                                        value="{{$phone->phone_model}}">
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Precio</strong>
                                    <input type="number" name="precio" id="precio" class="form-control"
                                        value="{{$phone->precio}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Slot SD</strong>
                                    <select name="sd_slot" id="sd_slot" class="form-control">
                                        @if($phone->sd_slot == 0)
                                        <option value="{{$phone->sd_slot}}" selected>No</option>
                                        <option value="1">Si</option>
                                        @else($phone->sd_slot == 1)
                                        <option value="{{$phone->sd_slot}}" selected>Si</option>
                                        <option value="0">No</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Dual SIM</strong>
                                    <select name="dual_sim" id="dual_sim" class="form-control">
                                        @if($phone->dual_sim == 0)
                                        <option value="{{$phone->dual_sim}}" selected>No</option>
                                        <option value="1">Si</option>
                                        @else($phone->dual_sim == 1)
                                        <option value="{{$phone->dual_sim}}" selected>Si</option>
                                        <option value="0">No</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Carga rápida</strong>
                                    <select name="fast_charge" id="fast_charge" class="form-control">
                                        @if($phone->dual_sim == 0)
                                        <option value="{{$phone->fast_charge}}" selected>No</option>
                                        <option value="1">Si</option>
                                        @else($phone->dual_sim == 1)
                                        <option value="{{$phone->fast_charge}}" selected>Si</option>
                                        <option value="0">No</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Color</strong>
                                    <select name="color_id" id="color_id" class="form-control">
                                        <option value="{{$phone->color_id}}" selected>{{$phone->getColor->color_name}}
                                        </option>
                                        @foreach($colors as $color)
                                        <option value="{{$color->id}}">{{$color->color_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Marca</strong>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="{{$phone->brand_id}}" selected>{{$phone->getBrand->brand_name}}
                                        </option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Tamaño pantalla</strong>
                                    <select name="screen_id" id="screen_id" class="form-control">
                                        <option value="{{$phone->screen_id}}" selected>{{$phone->getScreen->inches}}
                                        </option>
                                        @foreach($screens as $screen)
                                        <option value="{{$screen->id}}">{{$screen->inches}}</option>
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
                                        <option value="{{$phone->ram_memory_id}}" selected>
                                            {{$phone->getRam->ram_capacity}}
                                        </option>
                                        @foreach($rams as $ram)
                                        <option value="{{$ram->id}}">{{$ram->ram_capacity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>ROM</strong>
                                    <select name="rom_memory_id" id="rom_memory_id" class="form-control">
                                        <option value="{{$phone->rom_memory_id}}" selected>
                                            {{$phone->getRom->rom_capacity}}
                                        </option>
                                        @foreach($roms as $rom)
                                        <option value="{{$rom->id}}">{{$rom->rom_capacity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Capacidad batería</strong>
                                    <select name="battery_id" id="battery_id" class="form-control">
                                        <option value="{{$phone->battery_id}}" selected>{{$phone->getBattery->capacity}}
                                        </option>
                                        @foreach($batteries as $batery)
                                        <option value="{{$batery->id}}">{{$batery->capacity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Procesador</strong>
                                    <select name="processor_id" id="processor_id" class="form-control">
                                        <option value="{{$phone->processor_id}}" selected>
                                            {{$phone->getProcessor->processor_name}}
                                        </option>
                                        @foreach($processors as $processor)
                                        <option value="{{$processor->id}}">{{$processor->processor_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Gráficos</strong>
                                    <select name="graphic_card_id" id="graphic_card_id" class="form-control">
                                        <option value="{{$phone->graphic_card_id}}" selected>
                                            {{$phone->getGraphic->graphic_name}}
                                        </option>
                                        @foreach($graphics as $graphic)
                                        <option value="{{$graphic->id}}">{{$graphic->graphic_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>SO</strong>
                                    <select name="operating_system_id" id="operating_system_id" class="form-control">
                                        <option value="{{$phone->operating_system_id}}" selected>
                                            {{$phone->getOS->os_name}}
                                        </option>
                                        @foreach($ops as $os)
                                        <option value="{{$os->id}}">{{$os->os_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Foto Actual</strong>
                                    <img src="{{asset('uploads/phones/' . $phone->foto) }}" class="card-img-top"
                                        alt="Se supone que va la imagen" width="100px" height="100px">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <p>
                                    <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Cambiar imagen
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <strong>Seleccione imagen</strong>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="fotos"
                                                    aria-describedby="fotos">Seleccionar foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
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