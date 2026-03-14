@extends('layouts.layouts');

@section('css')
<link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')

<h2 class="colorlib-heading">Actividades de Servicio</h2>

<a href="actividades/create" class="btn btn-primary mb-3">CREAR</a>

<div class="col-lg-14">
    <table id="actividades" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td>{{$actividad->titulo}}</td>
                <td>{{$actividad->descripcion}}</td>
                <td>
                    <img src="{{asset ('imagesa/'.$actividad->imagen)}}"  alt="{{$actividad->imagen}}" height="50px" width="50px">
                </td>
                <td>
                    <form action="{{ route ('actividades.destroy',$actividad->id)}}" method="POST">
                    <a href="/actividades/{{$actividad->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@section('js')
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script>

$(document).ready(function() {
    $('#actividades').DataTable({
      "lengthMenu": [[5,10,50, -1],[5,10,50, "All"]]
    });
} );
</script>

@endsection


@endsection
