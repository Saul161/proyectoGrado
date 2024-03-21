@extends('layouts.app')
@section('content')

<div class="container text-center" style="color: red;">
    <h1>hola ordenes</h1>
</div>

<form action="{{route ('generarOrdenes')}}" method="POST" class="row justify-content">
@csrf   
    <div class="col-md-2 ">
        <select name="anl_id" id="anl_id" class="form-select">
            @foreach($periodos as $p)
            <option value="{{ $p->id }}">{{ $p->anl_descripcion}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2 ">
        <select name="jor_id" id="jor_id" class="form-select">
            @foreach($jornadas as $j)
            <option value="{{ $j->id }}">{{ $j->jor_descripcion}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2 ">
        <select name="mes" id="mes" class="form-select">
            @foreach($meses as $key=>$m )
            <option value="{{ $key }}">{{ $m }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2" >
    <button  type="submit" class="btn btn-info">
       GENERAR
    </button>
    </div>
</form>

@endsection

