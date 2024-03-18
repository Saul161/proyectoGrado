<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cursos')->insert([
            'cur_titulo'=>'Materticas',
            'cur_descripcion'=>'resolver ejercicios',
            'cur_grupo'=> 'nivel basico',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d')

             
        ]);

        DB::table('cursos')->insert([
            'cur_titulo'=>'lengua',
            'cur_descripcion'=>'aprender nuevos idiomas',
            'cur_grupo'=> 'nivel basico',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d')

             
        ]);

        DB::table('cursos')->insert([
            'cur_titulo'=>'Fisica',
            'cur_descripcion'=>'Memorisar nuevas formulas',
            'cur_grupo'=> 'nivel basico',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d')

             
        ]);
        DB::table('cursos')->insert([
            'cur_titulo'=>'informatica',
            'cur_descripcion'=>'aprender a manejar bases de datos',
            'cur_grupo'=> 'nivel basico',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d')

             
        ]);
        DB::table('cursos')->insert([
            'cur_titulo'=>'Electricidad',
            'cur_descripcion'=>'aprender instalar los circuitos electricos',
            'cur_grupo'=> 'nivel basico',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d')

             
        ]);
    }
}
