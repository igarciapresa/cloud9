@extends('layouts.app')
@section('title_header', 'Inicio')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Subir nueva fotografía</div>
                    <form action="{{route('new_photo_send')}}" method="POST" enctype="multipart/form-data" class="form-inline align-items-center justify-content-center" style="display: flex;flex-direction: column;">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2 form_new_photo">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                            <input type="file" class="form-control" id="src_image" name="src_image" placeholder="Fotografía" accept="image/png, image/jpeg, image/jpg">
                            <textarea class="form-control" id="description" name="description" placeholder="Descripción de tu fotografía"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Aceptar</button>
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