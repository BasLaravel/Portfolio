<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavaProjectsController extends Controller
{
    public function index(){

        return view('Java.todolist');  
    
    }
}
