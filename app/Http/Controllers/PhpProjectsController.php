<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpProjectsController extends Controller
{

    public function portfolioIndex(){

        return view('PHP.portfolio');  
    
    }

    public function forumIndex(){

        return view('PHP.forum');  
    
    }

    public function webshopIndex(){

        return view('PHP.webshop');  
    
    }
    
}
