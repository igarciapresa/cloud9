@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Bienvenido Admin
                  <a href="nuevo_user">Añadir nuevo usuario</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usuarios
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                          <th>Cambiar Role</th>
                          <th>Borrar Usuario</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                          @if($user->role != 'admin')
                            <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->role}}</td>
                              <td><a href="cambiarrole/{{$user->id}}">Cambiar Role</a></td>
                              <td><a href="borrarusuario/{{$user->id}}" onclick="return confirm('¿Seguro que quieres borrar el usuario {{$user->name}}?')" style="color:red;">Borrar Usuario</a></td>
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection