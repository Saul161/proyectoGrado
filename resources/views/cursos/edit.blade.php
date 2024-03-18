@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <h1>EDITAR CURSOS</h1>
    <br>
<form action="{{ route('cursos.update',$curso->cur_id) }}" method="POST">
    @csrf
    @method('PUT')
     
       @include('cursos.fields')

</form>


</div>

@endsection