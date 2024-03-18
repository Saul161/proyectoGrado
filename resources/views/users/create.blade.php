@extends('layouts.app')
@section('content')

<h1>hola como estas  create</h1>

<div class="row">
 <form action="{{route('users.store')}}" method="POST">
 @csrf
   <div class="col">
    <label for="rol_id" class="form-label text-danger">Elija un  rol</label>

    <select name="rol_id" >

      @foreach($roles as $r )

      <option value="{{ $r->rol_id}}">{{ $r->rol_descripcion}}</option>

      @endforeach

    </select>
    
    <label for="name" class="form-label text-danger">Name</label>
    <input  type="text" class="form-control" id="name" value="{{ isset($curso)?$curso->name:'' }}" name="name" placeholder="Escriba" aria-label="First name">
    
    <label for="usu_nombre" class="form-label text-danger">usu_nombre</label>
    <input  type="text" class="form-control" id="usu_nombre" value="{{ isset($curso)?$curso->usu_nombre:'' }}" name="usu_nombre" placeholder="Escriba" aria-label="First name">
    
    <label for="usu_telefono" class="form-label text-danger">TELEFONO</label>
    <input  type="text" class="form-control" id="usu_telefono" value="{{ isset($curso)?$curso->usu_telefono:'' }}" name="usu_telefono" placeholder="Escriba" aria-label="First name">  
   
    <label for="email" class="form-label text-danger">EMAIL</label>
    <input  type="email" class="form-control" id="email"  name="email" value="{{ isset($curso)?$curso->email:'' }}" placeholder="Escriba" aria-label="First name">


    <label for="passwors" class="form-label text-danger">PASSWORD  </label>
    <input  type="password" class="form-control" id="password"  name="password"  value="{{ isset($curso)?$curso->password:'' }}" placeholder="Escriba" aria-label="First name">

    <div>
        <button type="submit" class="btn btn-info dropdown-primary  text-white" href="" >guardar</button>
    </div>

   </div>

   </form>

</div>

@endsection
