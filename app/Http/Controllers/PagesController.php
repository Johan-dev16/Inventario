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
  
}
