@extends('layouts.app')
@section('content')


<h1>soy index de Usuarios</h1>
<a href=" {{ route('users.create') }} " class="btn btn-linght " style="background-color: #99b3c7"  > Nuevo curso</a>

<table class=" container table">


      <tr>
       <th>#</th>
       <th>rol</th>
       <th>Usuario</th>
       <th>Nombres</th>
       <th>telefono</th>
       <th>email</th>

      </tr>

      @foreach($users as $u)

      <tr>
        <td>  {{ $loop->iteration}}</td>  
        <td>  {{ $u->rol_id}}</td>        
        <td>  {{ $u->name}}</td>
        <td>  {{ $u->usu_nombre}}</td>
        <td>  {{ $u->usu_telefono}}</td>
        <td>  {{ $u->email}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('users.edit',$u->usu_id)}}" >Editar</a>
         
        </td>
    </tr>

      @endforeach

</table>






@endsection


