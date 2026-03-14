@extends('layouts.layouts');

@section('contenido')

<h1>Editar Registros</h1>


<form action="/actividades/{{$actividad->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
  @method('PUT')

  <div class="mb-3">

    {{$actividad->id}}
    <label for="" class="form-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" value="{{$actividad->titulo}}" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$actividad->descripcion}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" name="imagen" class="form-control">
    @if($actividad->imagen != "")
      <img src="{{asset ('imagesa/'.$actividad->imagen)}}"  alt="{{$actividad->imagen}}" height="50px" width="50px">
    @endif 
  </div>
  <br>  

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('actividades') }}">Regresar</a>
</form>





@endsection