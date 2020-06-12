@extends('layouts.app')
@section('title_header', 'Congreso')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-info">
               Regístrate para acceder a las ponencias
            </div>
            
            <div class="card">
                <div class="card-header">
                    Welcome
                    <a href="salon" style="float:right;">Salones</a>
                </div>
                <div class="card-body">
                    @if(count($ponencias))
                        @foreach($ponencias as $ponencia)
                        <?php
                          $assessment_true = 0
                        ?>
                    
                            <div class="ponencia">
                              <h3>{{$ponencia->titulo}}</h3>
                              <p class="description_photo">{{$ponencia->descripcion}}</p>
                            </div>
                        
                        @endforeach
                      @endif
                    {{ $ponencias->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
