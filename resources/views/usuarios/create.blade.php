@extends('layouts.layouts');

@section('contenido')

<h1>Crear Registros</h1>

<form id="guardar_usuarios" method="POST" action="{{url('/usuarios') }}" class="formed" accept-charset="UTF-8" enctype="multipart/form-data">
                      {!! csrf_field() !!}

  <div class="mb-6">
    <label for="" class="form-label">Nombres y Apellidos</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo Electronico</label>
    <input id="email" name="email" type="email" class="form-control" tabindex="2">
  </div>
  <div class="mb-6">
    <label for="" class="form-label">Password</label>
    <input id="password" name="password" type="password" class="form-control" tabindex="3">
  </div>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
  <a class="btn btn-info" href="{{url('usuarios') }}">Regresar</a>


</form>


@endsection