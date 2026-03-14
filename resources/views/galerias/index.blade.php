@extends('layouts.layouts');

@section('css')
<link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
 
<h2 class="colorlib-heading">Galerias</h2>

<a href="galerias/create" class="btn btn-primary mb-3">CREAR</a>

<div class="col-lg-14">
    <table id="galerias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Año</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galerias as $galeria)
            <tr>
                <td>{{$galeria->nombre}}</td>
                <td>
                    <img src="{{asset ('imagesg/'.$galeria->imagen)}}"  alt="{{$galeria->imagen}}" height="50px" width="50px">
                </td>
                <td>{{$galeria->ano}}</td>
                <td>
                    <form action="{{ route ('galerias.destroy',$galeria->id)}}" method="POST">
                    <a href="/galerias/{{$galeria->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#galerias').DataTable({
      "lengthMenu": [[5,10,50, -1],[5,10,50, "All"]]
    });
} );
</script>

@endsection


@endsection
