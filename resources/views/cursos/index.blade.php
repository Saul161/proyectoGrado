@extends('layouts.app')

@section('content')

<style>
        /* Estilos para la tabla */
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th, .table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        /* Agregar sombreado a las celdas de la tabla */
        .table tr {
            background-color: #99b3c7;
        }
    </style>


<h1>hola index</h1>
<a href=" {{ route('cursos.create') }} " class="btn btn-linght " style="background-color: #99b3c7"  > Nuevo curso</a>
<div class=" container">
    <br>
<table class=" container table" >
    <tr>
        <th class="col-1">#</th>
        <th class="col-2">TITULO</th>
        <th class="col-4">DESCRIPCION</th>
        <th class="col-2">GRUPO</th>
        <th class="col-1">ESTADO</th>
         <th class="col-2">ACCIONES</th>
    </tr>

     @foreach($cursos as $c)
     <tr>
    <td>{{$loop->iteration }} </td>
    <td>{{ $c->cur_titulo }}</td>
    <td>{{ $c->cur_descripcion }}</td>
    <td>{{ $c->cur_grupo }}</td>
    <td>{{ $c->cur_estado==1? 'Activo':'Inactivo' }}</td>
    <td>
        <a class="btn btn-primary" href="{{route ('cursos.edit',$c->cur_id) }}" >Editar</a>
         
        <form action="{{ route('cursos.destroy',$c->cur_id) }}" method="POST" onsubmit="return confirm('desea eliminar curso' )">
          @csrf   
          @method('DELETE')

         <button type="submit" class="btn btn-danger" > ELIMINAR</button>

        </form>

    </td>
    </tr>



     @endforeach

    </table>
</div>


@endsection