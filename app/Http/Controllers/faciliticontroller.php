<?php

namespace App\Http\Controllers;
use App\hotel;
use App\room; 
use App\advanceseach; 
use App\wedding; 
use Illuminate\Http\Request;

class faciliticontroller extends Controller
{
    public function loardfacilities($id){
        $hoteldata = hotel::hotelfas($id);
        $roomdata = room::roomfas($id); 
        $advances = advanceseach::facilitypage($id); 
        // $destination = destination::loarddestination();
         return view('frontend.facilities', compact('hoteldata', 'roomdata', 'advances'));
     }

     public function loardweddingfacilities($id){
        $wedding = wedding::wedding($id);
        $advances = advanceseach::facilitypage($id); 
        // $destination = destination::loarddestination();
         return view('frontend.weddingfacilities', compact('advances', 'wedding'));
     }
}
