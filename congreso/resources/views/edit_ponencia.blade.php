@extends('layouts.app')
@section('title_header', 'Inicio')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Editar ponencia</div>
                    <form action="{{route('ponencia_update')}}" method="POST" enctype="multipart/form-data" class="align-items-center justify-content-center" style="display: flex;flex-direction: column;">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $ponencia->id }}">
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $ponencia->titulo }}">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $ponencia->user_id }}">
                            <input type="text" class="form-control" id="url" name="url" value="{{ $ponencia->url }}">
                            <textarea id="descripcion" name="descripcion" style="width:30vw; padding-left:12px; color:gray; border-radius:4px; border-color:#CCC;">{{ $ponencia->descripcion }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Editar</button>
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