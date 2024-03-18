<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    DB::table('roles')->insert(
            [
                'rol_descripcion'=>'administrador',
                'rol_fecha'=>date('Y-m-d'),
                'created_at'=>date('Y-m-d'),
            ]);
            
    DB::table('roles')->insert(
            [
                'rol_descripcion'=>'Docente',
                'rol_fecha'=>date('Y-m-d'),
                'created_at'=>date('Y-m-d'),
             ]);

    DB::table('roles')->insert(
            [
                'rol_descripcion'=>'Estudiante',
                'rol_fecha'=>date('Y-m-d'),
                'created_at'=>date('Y-m-d'),
            ]);
                
    
                
    


    }
}
