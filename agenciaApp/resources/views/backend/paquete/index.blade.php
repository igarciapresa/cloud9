@extends('backend.base')

@section('contenido')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Borrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de querer borrar el paquete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form id="formBorrar" action="{{url('admin/paquete')}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar" class="btn btn-danger"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
    @if($mensaje != null)
    <div class="alert alert-primary mt-4" role="alert">
        {{$mensaje}}
    </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Destino</th>
                <th>Fecha inicial</th>
                <th>Fecha final</th>
                <th>Precio</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paquetes as $paquete)
                <tr>
                    <td>{{$paquete->destino}}</td>
                    <td>{{$paquete->fechainicial}}</td>
                    <td>{{$paquete->fechafinal}}</td>
                    <td>{{$paquete->precio}}</td>
                    <td><a href="{{url('amdin/paquete/' . $paquete->id)}}">Ver</a></td>
                    <td><a href="{{url('amdin/paquete/' . $paquete->id . '/edit')}}">Editar</a></td>
                    <td>
                        <a class="borrar" href="#" data-id="{{ $paquete->id }}" data-toggle="modal" data-target="#exampleModal">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    let deleteLinks = document.querySelectorAll('.borrar');
    var form= document.getElementById('formBorrar');
    var destino = form.action;
    for(var i = deleteLinks.length - 1; i >= 0; i--){
        deleteLinks[i].addEventListener('click', function(event){
            var id = event.target.dataset.id;
            form.action = destino + '/' + id;
        });
    }
</script>

@endsection