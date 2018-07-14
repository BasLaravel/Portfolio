<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpProjectsController extends Controller
{
    public function index(){

        return view('PHP.forum');  
    
    }

    public function index1(){

        return view('PHP.webshop');  
    
    }
    
}
