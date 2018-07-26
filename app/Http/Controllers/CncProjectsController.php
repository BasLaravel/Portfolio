<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CncProjectsController extends Controller
{
    public function CncPr1index(){

        return view('CNC.program1');  
    
    }

    public function CncPr2index(){

        return view('CNC.program2');  
    
    }
    
}
