@extends('layouts.app')
@section('content')

<div class="container text-center" style="color: red;">
<h1>hola ordenes</h1>
</div>

<form action="">

<select name="" id="" class="form-select"">
    @foreach($periodos as $p)
    <option value="{{ $p->id }}">{{ $p->anl_descripcion}}
    </option>

    @endforeach
</select>
<select name="" id="" class="form-select"">
    @foreach($jornadas as $j)
    <option value="{{ $j->id }}">{{ $j->jor_descripcion}}
    </option>

    @endforeach
</select>
<select name="" id="" class="form-select">
    @foreach($meses as $id => $mes_descripcion)
        <option value="{{ $id }}">{{ $mes_descripcion }}</option>
    @endforeach
</select>

</form>






@endsection('content')