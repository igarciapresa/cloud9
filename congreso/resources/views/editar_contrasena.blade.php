@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Edita tu contraseña</div>
                    <form action="{{route('actualizar_contrasena')}}" method="POST" enctype="multipart/form-data" class="align-items-center justify-content-center">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2" style="width: 50%;">
                            <input type="hidden" name="id_user" value="{{$user->id}}"/>
                            Contraseña nueva: <input type="password" class="form-control" id="contrasena" name="contrasena">
                            Repetir contraseña: <input type="password" class="form-control" id="repite" name="repite">
                            <input type="submit" value="Editar" class="btn btn-success mb-2" style="margin-top: 10px;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection