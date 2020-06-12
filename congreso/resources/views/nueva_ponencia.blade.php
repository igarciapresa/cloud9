@extends('layouts.app')
@section('title_header', 'Inicio')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Crear nueva ponencia</div>
                    <form action="{{route('nueva_ponencia_store')}}" method="POST" enctype="multipart/form-data" class="align-items-center justify-content-center" style="display: flex;flex-direction: column;">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $user_id }}">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Url del vídeo">
                            <textarea id="descripcion" name="descripcion" placeholder="Descripción" style="width:30vw; padding-left:12px; color:gray; border-radius:4px; border-color:#CCC;"></textarea>
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