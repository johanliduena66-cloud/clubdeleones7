@extends('layouts.layouts');

@section('contenido')

<h1>Crear Registros</h1>

<form id="guardar_videos" method="POST" action="{{url('/videos') }}" class="formed" accept-charset="UTF-8" enctype="multipart/form-data">
                      {!! csrf_field() !!}


  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input id="ano" name="ano" type="number" class="form-control" tabindex="3">
  </div>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('videos') }}">Regresar</a>

</form>


@endsection