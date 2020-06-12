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
                    <form method="POST" action="{{url('salon')}}" enctype="multipart/form-data" class="align-items-center justify-content-center">
                        @csrf
                        <div class="form-group mx-sm-3 mb-2" style="width: 50%;">
                            
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            @error('nombre')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            <input type="number" min="1" class="form-control" name="capacidad" placeholder="Capacidad" style="margin-top: 10px;">
                            @error('capacidad')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            <input type="text" class="form-control" name="ubicacion" placeholder="Ubicación" style="margin-top: 10px;">
                            @error('ubicacion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            <input type="submit" value="Crear" class="btn btn-success mb-2" style="margin-top: 10px;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection