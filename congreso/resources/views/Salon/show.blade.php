@extends('layouts.app')

@section('content')
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
        <form id="formBorrar" action="{{$salon->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Borrar" class="btn btn-danger"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Salon {{$salon->id}}
                    <a href="{{url('salon')}}" style="float:right;">Volver</a>
                </div>

                <div class="card-body">
                    <h4>Nombre: {{$salon->nombre}}</h4>
                    <h4>Capacidad: {{$salon->capacidad}}</h4>
                    <iframe src="{{$salon->ubicacion}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    @if (Auth::user())
                    @if (Auth::user()->role=='admin' || Auth::user()->role=='comite')
                    <a href="{{url('salon/' . $salon->id . '/edit')}}" class="btn btn-success" style="margin: 10px 0px">Editar Salón</a>
                    <a class="borrar btn btn-danger" href="#" data-id="{{ $salon->id }}" data-toggle="modal" data-target="#exampleModal">Borrar Salón</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
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