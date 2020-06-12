@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($mensaje != null)
            <div class="alert alert-primary mt-4" role="alert">
                {{$mensaje}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Salones
                    @if (Auth::user())
                    @if (Auth::user()->role=='admin' || Auth::user()->role=='comite')
                        | <a href="salon/create">Añadir nuevo salón</a>
                    @endif
                    @endif
                    <a href="{{ url('') }}" style="float:right;">Ponencias</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($salones))
                        @foreach($salones as $salon)
                        <a href="salon/{{$salon->id}}">
                            <div class="ponencia">
                              <h3>{{$salon->nombre}}</h3>
                              <p class="description_photo">Capacidad: {{$salon->capacidad}}</p>
                            </div>
                        </a>
                        @endforeach
                    @endif
                    {{ $salones->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection