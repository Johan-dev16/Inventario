<?php

namespace App\Http\Controllers;

use App\equipo;
use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{


    public function persona(){
        return view ('personas');
    }

    public function mantenimiento(){
        return view ('mantenimiento');
    }


    public function update(Request $request)
        {


        }

  
}
