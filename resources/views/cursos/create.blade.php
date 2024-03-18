@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <h1>CREAR CURSOS</h1>
    <br>
<form action="{{ route('cursos.store') }}" method="POST">
    @csrf
     
       @include('cursos.fields')

</form>


</div>


@endsection