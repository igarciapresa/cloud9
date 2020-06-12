@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header" style="border:none">Edita tus datos</div>
                    <form action="{{route('actualizar_usuario')}}" method="POST" enctype="multipart/form-data" class="align-items-center justify-content-center">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2" style="width: 50%;">
                            <input type="hidden" name="id_user" value="{{$user->id}}"/>
                            Nombre: <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                            Email: <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                            <input type="submit" value="Editar" class="btn btn-success mb-2" style="margin-top: 10px;"/>
                        </div>
                    </form>
                    <div class="card-header" style="border:none"><a href="editar_contrasena">Editar contraseña</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection