<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Test;

class DBtestController extends Controller
{
    public function store(){

            $record = new test(['name'=>'Bas']);
            $record->save();

            return "Naam Bas aangemaakt";
      

    }

    public function index(){

        $user = Test::where('name','Bas')->get();
//dd($user);
        return $user;
  

}


}
