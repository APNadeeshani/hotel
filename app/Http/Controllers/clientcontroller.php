<?php

namespace App\Http\Controllers;
use App\client; 
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function clientloard(){
         $client = client::loarddestination();
         return view('backend.clients.index',  compact('client'));
     }

     public function clientnew(){
     //   $client = client::loarddestination();
        return view('backend.clients.new');
    }
     
}
