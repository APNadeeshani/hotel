<?php

namespace App\Http\Controllers;
use App\hotel; 
use App\destination;  
use App\availability; 
use Illuminate\Support\Facades\Auth;//copied
use Illuminate\Http\Request;


class availabilitycontroller extends Controller
{

        //hotelinfopage
        public function loadindex(){
            $availabilities = availability::loardavailability();
            return view('backend.hoteladmin.index', compact('availabilities'));
        }
        
        //hotelinfopage
        public function editehoteladmin(){
            $destinationdata = destination::destinationloard();
            $hoteldata = hotel::loarddayouting();
            return view('backend.hoteladmin.edit', compact('hoteldata', 'destinationdata'));
        }
    
        //hotelinfopage
        public function availablehoteladmin(){
            $hoteldata = hotel::loarddayouting();
            return view('backend.hoteladmin.availabilityroom', compact('hoteldata'));
        }
    
        //save new budget
        public function availabilitysave(Request $request){
            $availability = new availability;
            $availability->hotelid= '1';
            $availability->roomtype=$request->roomcategory;
            $availability->roomcount=$request->roomcount;
            $availability->startdate=$request->stdate;
            $availability->enddate=$request->endate;
            $availability->remark=$request->rmrk;
            $availability->sts='1';
            try {

                $availability->save();
                return redirect()->back()->with('success', 'Room Availability saving process Successfuly completed');

            } catch (Exception $e) {

                return redirect()->back()->with('error', 'Data saving Error ..! Please contact with our agent');
            }
        }
}
