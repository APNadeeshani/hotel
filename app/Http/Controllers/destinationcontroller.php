<?php

namespace App\Http\Controllers;
use App\destination; 
use Illuminate\Http\Request;

class destinationcontroller extends Controller
{
    //save new budget
    public function destinationsave(Request $request){
        //  $logedid = Auth::id();
            $destination = new destination;
            $destination->name=$request->dena;
            $destination->descrition=$request->dest;
            $destination->img='0';
            $destination->status='1';
            $destination->created_at='2015-10-15';
            $destination->updated_at='2015-10-15';

            try {
    
                $destination->save();
                return redirect()->back()->with('success', 'Hotel Registration Request Successfuly sent ..! Our Agent will contact with you soon.');
    
            } catch (Exception $e) {
    
                return redirect()->back()->with('error', 'Request Sending Error ..! Please contact with our agent');
            }
        }


    //load hotels
    public function loardindex(){
        $destination = destination::loarddestination();
        return view('backend.destination.index', compact('destination'));
    }

    public function newdestination(){
       // $destination = destination::loarddestination();
        return view('backend.destination.new');
    }
    
    
}
