<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneraOrdenes;
use DB;
use Auth;


class GeneraOrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $rq) 
    {
        //

        $periodos=DB::select("SELECT * FROM aniolectivo");
        $jornadas=DB::select("SELECT * FROM jornadas");
        $meses=$this->meses();
        return view('genera_ordenes.index')
        ->with('periodos',$periodos)
        ->with('jornadas',$jornadas)
        ->with('meses',$meses);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function meses(){
        $meses=[

            '1'=>'Enero',
            '2'=>'Febrero',
            '3'=>'Marzo',
            '4'=>'Abril',
            '5'=>'Mayo',
            '6'=>'Junio',
            '7'=>'Julio',
            '8'=>'Julio',
            '9'=>'Julio',
            '10'=>'Julio',
            '11'=>'Nombre',
            '12'=>'Diciembre',
        ];
        return $meses;

        public function mesesLetra($nmes){
            $result="";
            switch($nmes){
                case 1: $result="E";break;
                case 2: $result="E";break;
                case 3: $result="E";break;
                case 4: $result="E";break;
                case 5: $result="E";break;
                case 6: $result="E";break;
                case 7: $result="E";break;
                case 8: $result="E";break;
                case 9: $result="E";break;
                case 10: $result="E";break;
                case 11: $result="E";break;
                case 12: $result="E";break;
            }
        }
    }
    public function generarOrdenes(Request $rq){
    // dd('gerar orden');
    $datos=$rq->all();
    $anl_id=$datos['anl_id'];
    $jor_id=$datos['jor_id'];
    $mes=$datos['mes'];

    $estudiantes=DB::select("SELECT *,m.id=mat_id FROM matriculas m
    JOIN estudiantes e ON m.est_id=e.id
    WHERE m.anl_id=$anl_id
    AND m.mat_estado=1
    AND m.jor_id=$jor_id
    ");
    // dd($estudiantes);
    $valor_pagar=75;
    dd(Auth::User()->name);
    foreach($estudiantes as $e){

    dd($e->mat_id);

     $input[ 'mat_id']='';   //
     $input['codigo']='';    ///MGM3IF-1523
     $input['fecha_pago']=date ('y-m-d');   ///
     $input['valor_pagar']=$valor_pagar;
     $input['fecha_pago']=null;
     $input['valor_pagado']=0;
    $input['estado']=0;
    $input['mes']=$mes;
    $input['responsable']=Auth::User()->name;
    // $input['secuencial']='';
    $input['documento']='';
                
            }
              

}

        
        




}
