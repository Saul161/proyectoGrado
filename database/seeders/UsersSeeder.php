<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
        'rol_id'=>1,
        'name'=>'saul',
        'usu_nombre'=>'Alexis S',
        'usu_telefono'=>'0984267513',
        'email'=>'alexis@gmail.com',
        'password'=>bcrypt('1234567899')    
    ]);
    DB::table('users')->insert([
        'rol_id'=>1,
        'name'=>'leo',
        'usu_nombre'=>'leo',
        'usu_telefono'=>'0944267513',
        'email'=>'leo1234@gmail.com',
        'password'=>bcrypt('9999999')    
    ]);

    }
}
