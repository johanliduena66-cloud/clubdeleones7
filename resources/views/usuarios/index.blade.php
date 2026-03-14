@extends('layouts.layouts');

@section('css')
<link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')

<h2 class="colorlib-heading">Usuarios</h2>

<a href="usuarios/create" class="btn btn-primary mb-3">CREAR</a>

<div class="col-lg-14">
    <table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre y Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <form action="{{ route ('usuarios.destroy',$usuario->id)}}" method="POST">
                    <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#usuarios').DataTable({
      "lengthMenu": [[5,10,50, -1],[5,10,50, "All"]]
    });
} );
</script>

@endsection


@endsection
