<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CncController extends Controller
{
    public function index(){

        return view('CNC.program1');  
    
    }

    public function index1(){

        return view('CNC.program2');  
    
    }
    
}
