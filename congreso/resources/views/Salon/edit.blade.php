@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo salón
                    <a href="{{url('salon')}}" style="float:right;">Cancelar</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('salon/' . $salon->id) }}" enctype="multipart/form-data" class="align-items-center justify-content-center">
                        @csrf
                        @method('PUT')
                        <div class="form-group mx-sm-3 mb-2" style="width: 50%;">
                            
                            <div style="display:flex; align-items:baseline">
                                <span>Nombre:</span>
                                <input type="text" class="form-control" name="nombre" value="{{old('nombre', $salon->nombre)}}" style="margin-top: 10px;">
                            </div>
                            @error('nombre')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            <div style="display:flex; align-items:baseline">
                                <span>Capacidad:</span>
                                <input type="number" min="1" class="form-control" name="capacidad" value="{{old('capacidad', $salon->capacidad)}}" style="margin-top: 10px;">
                            </div>
                            @error('capacidad')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            
                            <div style="display:flex; align-items:baseline">
                                <span>Ubicación:</span>
                                <input type="text" class="form-control" name="ubicacion" value="{{old('ubicacion', $salon->ubicacion)}}" style="margin-top: 10px;">
                            </div>
                            @error('ubicacon')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            <input type="submit" value="Cambiar" class="btn btn-success mb-2" style="margin-top: 10px;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection