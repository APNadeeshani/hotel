<?php

namespace App\Http\Controllers;
use App\contact; 
use Illuminate\Http\Request;
class contactcontroller extends Controller
{
    public function contactus(){
         return view('frontend.contact');
     }

     public function comingsoon(){
        return view('frontend.commingsoon');
    }

    //save new budget
    public function contcsv(Request $request){
        $contact = new contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->website=$request->website;
        $contact->comments=$request->comments;
        $contact->sts='0';
        try {

            $contact->save();
            return redirect()->back()->with('success', 'Contact details save successfully ..!');

        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Details saving Error ..!');
        }
    }
}
