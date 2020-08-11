<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    //loard about us page
    public function aboutloard(){
        return view('frontend.about');
    }
}
