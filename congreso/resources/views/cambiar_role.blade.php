@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border:none">Usuario: {{$user->name}}</div>
                    <form action="{{route('nuevo_role_user')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="{{$user->id}}"/>
                        <span>Tipo de usuario: </span>
                        <select name="new_role" value="{{ $user->role }}">
                        
                            <option value="{{ $user->role }}">{{ $user->role }}</option>
                            
                            @if ($user->role != 'user')
                                        <option value="user">user</option>
                            @endif
                            @if ($user->role != 'ponente')
                                        <option value="ponente">ponente</option>
                            @endif
                            @if ($user->role != 'comite')
                                        <option value="comite">comite</option>
                            @endif
                
                        </select>
                        <button type="submit" class="btn btn-success mb-2">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection