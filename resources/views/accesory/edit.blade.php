@extends('adminlte::page')

@section('title', 'Accesorios')

@section('content_header')
<h1>Accesorios</h1>
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
                    <h2 class="text-center">Editar accesorio</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('accesory.update', $accesory->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <strong>Nombre</strong>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{$accesory->name}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <strong>Modelo</strong>
                                    <input type="text" name="model" id="model" class="form-control"
                                        value="{{$accesory->model}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <strong>Marca</strong>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="{{$accesory->brand_id}}" selected>
                                            {{$accesory->getBrand->brand_name}}
                                        </option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <strong>Precio</strong>
                                    <input type="number" name="price" id="price" class="form-control"
                                        value="{{$accesory->price}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>SKU</strong>
                                    <input type="text" name="sku" id="sku" class="form-control"
                                        value="{{$accesory->sku}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Condición del producto</strong>
                                    <select name="condition" id="condition" class="form-control">
                                        <option value="{{$accesory->condition}}" selected>
                                            {{$accesory->condition}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Color</strong>
                                    <select name="color_id" id="color_id" class="form-control">
                                        <option value="{{$accesory->brand_id}}" selected>
                                            {{$accesory->getColor->color_name}}
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
                                    <strong>Pais de Origen</strong>
                                    <input type="text" name="country" id="country" class="form-control"
                                        value="{{$accesory->country}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Peso</strong>
                                    <input type="text" name="weight" id="weight" class="form-control"
                                        value="{{$accesory->weight}}">
                                    <small>Peso se ve en Kg.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Garantía del producto</strong>
                                    <input type="number" name="warranty" id="warranty" class="form-control"
                                        value="{{$accesory->warranty}}">
                                    <small>La garantía va en meses.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <strong>Foto Actual</strong>
                                    <img src="{{asset('uploads/accesories/' . $accesory->foto) }}" class="card-img-top"
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
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Descripción del producto</strong>
                                    <textarea name="description" id="description" cols="30" rows="5"
                                        class="form-control">{{$accesory->description}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('accesory.index') }}" class="btn btn-warning">Cancelar</a>
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