@extends('layouts.layouts');

@section('contenido')

<h1>Crear Registros</h1>

<form id="guardar_actividades" method="POST" action="{{url('/actividades') }}" class="formed" accept-charset="UTF-8" enctype="multipart/form-data">
                      {!! csrf_field() !!}

  <div class="mb-6">
    <label for="" class="form-label">Titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" name="imagen" class="form-control"  tabindex="2">
  </div>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('actividades') }}">Regresar</a>

</form>


@endsection