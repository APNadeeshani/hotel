<?php

namespace App\Http\Controllers;
use App\advanceseach; 
use App\wedding;
use Illuminate\Http\Request;

class advanceseachcontroller extends Controller
{
    //
    public function searchbydate(Request $request){
        $hoteldata = advanceseach::loardhotels($request);
        return view('frontend.hotelsearch', compact('hoteldata'));
    }

    //advance filter
        //ajax  dayouting
        function searchdayouting(Request $request){
            $data["details"]=advanceseach::advancefilterdayouting($request);
            echo json_encode($data);
   
        }

      //ajax  
      function searchadvce(Request $request){
            $data["details"]=advanceseach::advancefilter($request);
            echo json_encode($data);
   
        }

    //ajax  
      function htldestination(Request $request){
        $data["details"]=advanceseach::advancefilterdes($request);
        echo json_encode($data);

    }

    //ajax  searchtype
    function searchtype(Request $request){
        $data["details"]=advanceseach::advancefilterdestype($request);
        echo json_encode($data);

    }

    
    //ajax  wedding 
    function searchwedig(Request $request){
        $data["details"]=wedding::searchwedding($request);
        echo json_encode($data);

    }

}

