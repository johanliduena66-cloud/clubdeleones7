@extends('layouts.layouts');

@section('contenido')

<h1>Editar Registros</h1>


<form action="/galeriash/{{$galeriah->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
  @method('PUT')

  <div class="mb-3">

    {{$galeriah->id}}
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$galeriah->nombre}}" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="ano" name="ano" type="text" class="form-control" value="{{$galeriah->ano}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" name="imagen" class="form-control">
    @if($galeriah->imagen != "")
      <img src="{{asset ('imagesh/'.$galeriah->imagen)}}"  alt="{{$galeriah->imagen}}" height="50px" width="50px">
    @endif 
  </div>
  <br>  

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('galeriash') }}">Regresar</a>
</form>





@endsection