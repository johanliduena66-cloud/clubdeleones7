@extends('layouts.layouts');

@section('contenido')

<h1>Editar Registros</h1>


<form action="/videos/{{$video->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
  @method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$video->descripcion}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="ano" name="ano" type="text" class="form-control" value="{{$video->ano}}" tabindex="2">
  </div>  
  <br>  

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('videos') }}">Regresar</a>
</form>





@endsection