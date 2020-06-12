@extends('layouts.app')
@section('title_header', 'Inicio')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Cambiar comentario fotografía</div>
                    <form action="{{route('new_change_description')}}" method="POST" enctype="multipart/form-data" class="form-inline align-items-center justify-content-center" style="display: flex;flex-direction: column;">
                        {{ csrf_field() }}
                        <div class="form-group mx-sm-3 mb-2 form_new_photo">
                            <input type="hidden" id="id_image" name="id_image" value="{{$photo->id}}">
                            <textarea class="form-control" id="description" name="description" placeholder="Descripción de tu fotografía"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
