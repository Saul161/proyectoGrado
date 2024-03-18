<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function info(){
        return view('test.info');
    }

    public function  contacts(){
        return view('test.contacts');
    }

    public function helps(){
        return view('test.helps');
    
    }

    public function fres(){
        return view('test.fres');
    }

    public function welcome(){
        return view('welcome');
    }
}
