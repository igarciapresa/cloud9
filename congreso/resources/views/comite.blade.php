@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Bienvenido {{ $user_name }}
                </div>

                <div class="card-body row" style="display: flex;justify-content: space-around">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  @if(count($ponencias))
                    @foreach($ponencias as $ponencia)
                    <?php
                      $assessment_true = 0;
                      $author = DB::table('users')->where('id', $ponencia->user_id)->get()->first();
                    ?>
                    <div>
                      <h2>{{$ponencia->titulo}}</h2>
                      <h5>de {{$author->name}}</h5>
                      <a href="editponencia/{{$ponencia->id}}">Editar Ponencia</a>
                      <a href="borrarponencia/{{$ponencia->id}}" onclick="return confirm('¿Seguro que quieres borrar la ponencia {{$ponencia->titulo}}?')" style="color:red;">Borrar Ponencia</a>
                      <?php
                      $url = "{{$ponencia->url}}";
                      parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                     $my_array_of_vars['v'] = substr($my_array_of_vars['v'], 0, -1);
                      ?> 
                      <iframe width="550" height="300" src="http://www.youtube.com/embed/<?php echo $my_array_of_vars['v'] ?>"></iframe>
                      <p class="description_photo">{{$ponencia->descripcion}}</p>
                      <hr>
                    </div>
                    @endforeach
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection