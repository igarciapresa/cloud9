@extends('layouts.app')
@section('title_header', 'Congreso')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    @if (Auth::user()->role=='admin')
                    | <a href="administrador">Panel Administración</a>
                    @elseif (Auth::user()->role=='ponente')
                    | <a href="ponente">Gestionar tus ponencias</a>
                    | <a href="{{route('Ponente.index')}}">Gestionar tus ponencias 2</a>
                    @elseif (Auth::user()->role=='comite')
                    | <a href="comite">Gestionar ponencias</a>
                    @endif
                    | <a href="usuario">Editar mis datos</a>
                    <a href="salon" style="float:right;">Salones</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($ponencias))
                        @foreach($ponencias as $ponencia)
                        <?php
                          $assessment_true = 0
                        ?>
                        <a href="vista_ponencia/{{$ponencia->id}}">
                            <div class="ponencia">
                              <h3>{{$ponencia->titulo}}</h3>
                              <p class="description_photo">{{$ponencia->descripcion}}</p>
                            </div>
                        </a>
                        @endforeach
                      @endif
                    {{ $ponencias->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
