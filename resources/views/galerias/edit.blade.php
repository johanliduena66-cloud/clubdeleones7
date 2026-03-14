@extends('layouts.layouts');

@section('contenido')

<h1>Editar Registros</h1>


<form action="/galerias/{{$galeria->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
  @method('PUT')

  <div class="mb-3">

    {{$galeria->id}}
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$galeria->nombre}}" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="ano" name="ano" type="text" class="form-control" value="{{$galeria->ano}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" name="imagen" class="form-control">
    @if($galeria->imagen != "")
      <img src="{{asset ('imagesg/'.$galeria->imagen)}}"  alt="{{$galeria->imagen}}" height="50px" width="50px">
    @endif 
  </div>
  <br>  

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('galerias') }}">Regresar</a>
</form>





@endsection