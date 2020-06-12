@extends('backend.base')

@section('contenido')

<div class="container
        
        <input value="{{old('destino', $paquete->destino)}}" type="text" name="destino" placeholder="destino" minlength="5" maxlength="255" required/><br/>
        
        <textarea name="descripcion" placeholder="descripcion">{{old('descripcion', $paquete->descripcion)}}</textarea><br/>
        
        <input  value="{{old('fechainicial', $paquete->fechainicial)}}" type="date" name="fechainicial" required/><br/>
        
        <input  value="{{old('fechafinal', $paquete->fechafinal)}}" type="date" name="fechafinal" required/><br/>
        
        <input  value="{{old('precio', $paquete->precio)}}" type="number" step="0.01" min="0" max="999999.99" name="precio" required/><br/>
        
        @foreach($files as $file)
                <img src="{{url($file->pathName)}}" alt="genérico" width="150px">
                <br>
        @endforeach
</div>

@endsection