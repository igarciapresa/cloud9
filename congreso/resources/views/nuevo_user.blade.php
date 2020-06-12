@extends('layouts.app')
@section('title_header', 'Inicio')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Crear nuevo usuario</div>
                    <form action="{{route('nuevo_user_store')}}" method="POST" enctype="multipart/form-data" class="align-items-center justify-content-center" style="display: flex;flex-direction: column;">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2 form_new_photo">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            <input type="hidden" class="form-control" id="email_verified_at" name="email_verified_at" value="{{ $time }}">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repetir Contraseña">
                            <span style="margin-left:10px;">Role: </span>
                            <select name="role" style="padding:5px; color:gray; border-radius:4px; margin-left:60px; border-color:#CCC;">
                                <option value="user">user</option>
                                <option value="ponente">ponente</option>
                                <option value="comite">comite</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Crear</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection