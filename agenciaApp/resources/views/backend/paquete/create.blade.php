@extends('backend.base')

@section('contenido')

<div class="container">
    <form method="POST" action="{{ url('admin/paquete') }}" enctype="multipart/form-data">
        
        @csrf
        
        @error('destino')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input value="{{old('destino')}}" type="text" name="destino" placeholder="destino" minlength="5" maxlength="255" required/><br/>
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <textarea name="descripcion" placeholder="descripcion">{{old('descripcion')}}</textarea><br/>
        @error('fechainicial')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input  value="{{old('fechainicial')}}" type="date" name="fechainicial" required/><br/>
        @error('fechafinal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input  value="{{old('fechafinal')}}" type="date" name="fechafinal" required/><br/>
        @error('precio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input  value="{{old('precio')}}" type="number" step="0.01" min="0" max="999999.99" name="precio" required/><br/>
        @error('imagen')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input type="file" name="imagen[]" multiple/><br/>
        
        <input type="submit"/>
    </form>
</div>

@endsection