<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class advanceseach extends Model
{
    //client 
    public static function loardhotels($request){
        $sql= DB::table('hotels')
        ->select('*')
        ->where('status',1) 
        ->where('destination',$request->destn)
        ->get();
        return $sql;     
    }


    //advance 
    public static function advancefilterdayouting($request){
        $sql= DB::table('hotels')
        ->select('hotels.*')
        ->leftjoin('advanceseaches','hotels.id', '=', 'advanceseaches.hotelid')
        ->where('hotels.dayout','1') 
        ->orwhere('advanceseaches.pool',$request->swimming) 
        ->orwhere('advanceseaches.bathroom',$request->privatebathroom)  
        ->orwhere('advanceseaches.breakfast',$request->breakfast)
        ->orwhere('advanceseaches.beachfront',$request->beachfront)  
        ->orwhere('advanceseaches.airconditioning',$request->airconditioning)
        ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner)
        ->orwhere('advanceseaches.seaview',$request->seaview)
        ->orwhere('advanceseaches.bath',$request->bath)
        ->orwhere('advanceseaches.balcony',$request->balcony)
        ->orwhere('advanceseaches.spabath',$request->spabath)
        ->orwhere('advanceseaches.twinbeds',$request->twinbeds)
        ->orwhere('advanceseaches.kitchen',$request->kitchen)
        ->orwhere('advanceseaches.freewiFi',$request->freewifi)
        ->orwhere('advanceseaches.hiking',$request->hiking)
        ->orwhere('advanceseaches.walking',$request->walking)
        ->orwhere('advanceseaches.bicyclerental',$request->bicycle) 
        ->orwhere('advanceseaches.localculture',$request->localculture) 
        ->orwhere('advanceseaches.cookingclz',$request->Cooking)  
        ->orwhere('advanceseaches.withoutcredit',$request->creditcard)
        ->orwhere('advanceseaches.prepayment',$request->noprepayment)
        ->orwhere('advanceseaches.allmeals',$request->allmeals)
        ->orwhere('advanceseaches.inclusive',$request->allinclusive)
        ->orwhere('advanceseaches.breakfastlunch',$request->breakfastlunch)
        ->orwhere('advanceseaches.selfcatering',$request->selfcatering)  	 
        ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner) 
        ->orwhere('advanceseaches.airportshuttle',$request->airportshuttle)   
        ->orwhere('advanceseaches.parking',$request->parking)
        ->orwhere('advanceseaches.nonsmoking',$request->nonsmoking) 
        ->orwhere('advanceseaches.familyrooms',$request->familyrooms) 
        ->orwhere('advanceseaches.wellnesscenter',$request->wellnesscenter) 
        ->orwhere('advanceseaches.petsallowed',$request->pets) 
        ->orwhere('advanceseaches.electricvehiclecharg',$request->electricvehicle) 
        ->orwhere('advanceseaches.pool',$request->swimmingpool) 
        ->orwhere('advanceseaches.fitnesscenter',$request->fitnesscenter) 
        ->orwhere('advanceseaches.airconditioning',$request->conditioning)
        ->orwhere('advanceseaches.terrace',$request->terrace) 
        ->orwhere('advanceseaches.flat-screentv',$request->flatscreentv)  
        ->orwhere('advanceseaches.Washingmachine',$request->washing) 
        ->orwhere('advanceseaches.kettle',$request->kettle) 
        ->orwhere('advanceseaches.teamaker',$request->teamaker) 
        ->get(); 

        return $sql;  
    }

    //advance 
    public static function advancefilter($request){
        $sql= DB::table('hotels')
        ->select('hotels.*')
        ->leftjoin('advanceseaches','hotels.id', '=', 'advanceseaches.hotelid')
        ->orwhere('advanceseaches.pool',$request->swimming) 
        ->orwhere('advanceseaches.bathroom',$request->privatebathroom)  
        ->orwhere('advanceseaches.breakfast',$request->breakfast)
        ->orwhere('advanceseaches.beachfront',$request->beachfront)  
        ->orwhere('advanceseaches.airconditioning',$request->airconditioning)
        ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner)
        ->orwhere('advanceseaches.seaview',$request->seaview)
        ->orwhere('advanceseaches.bath',$request->bath)
        ->orwhere('advanceseaches.balcony',$request->balcony)
        ->orwhere('advanceseaches.spabath',$request->spabath)
        ->orwhere('advanceseaches.twinbeds',$request->twinbeds)
        ->orwhere('advanceseaches.kitchen',$request->kitchen)
        ->orwhere('advanceseaches.freewiFi',$request->freewifi)
        ->orwhere('advanceseaches.hiking',$request->hiking)
        ->orwhere('advanceseaches.walking',$request->walking)
        ->orwhere('advanceseaches.bicyclerental',$request->bicycle) 
        ->orwhere('advanceseaches.localculture',$request->localculture) 
        ->orwhere('advanceseaches.cookingclz',$request->Cooking)  
        ->orwhere('advanceseaches.withoutcredit',$request->creditcard)
        ->orwhere('advanceseaches.prepayment',$request->noprepayment)
        ->orwhere('advanceseaches.allmeals',$request->allmeals)
        ->orwhere('advanceseaches.inclusive',$request->allinclusive)
        ->orwhere('advanceseaches.breakfastlunch',$request->breakfastlunch)
        ->orwhere('advanceseaches.selfcatering',$request->selfcatering)  	 
        ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner) 
        ->orwhere('advanceseaches.airportshuttle',$request->airportshuttle)   
        ->orwhere('advanceseaches.parking',$request->parking)
        ->orwhere('advanceseaches.nonsmoking',$request->nonsmoking) 
        ->orwhere('advanceseaches.familyrooms',$request->familyrooms) 
        ->orwhere('advanceseaches.wellnesscenter',$request->wellnesscenter) 
        ->orwhere('advanceseaches.petsallowed',$request->pets) 
        ->orwhere('advanceseaches.electricvehiclecharg',$request->electricvehicle) 
        ->orwhere('advanceseaches.pool',$request->swimmingpool) 
        ->orwhere('advanceseaches.fitnesscenter',$request->fitnesscenter) 
        ->orwhere('advanceseaches.airconditioning',$request->conditioning)
        ->orwhere('advanceseaches.terrace',$request->terrace) 
        ->orwhere('advanceseaches.flat-screentv',$request->flatscreentv)  
        ->orwhere('advanceseaches.Washingmachine',$request->washing) 
        ->orwhere('advanceseaches.kettle',$request->kettle) 
        ->orwhere('advanceseaches.teamaker',$request->teamaker) 
        ->get(); 

        return $sql;  
    }


    //advance search by type
    public static function advancefilterdestype($request){
           $sql= DB::table('hotels')
           ->select('hotels.*')
           ->leftjoin('advanceseaches','hotels.id', '=', 'advanceseaches.hotelid')
           ->where('hotels.type',$request->typehide) 
               ->orwhere('advanceseaches.pool',$request->swimming) 
               ->orwhere('advanceseaches.bathroom',$request->privatebathroom)  
               ->orwhere('advanceseaches.breakfast',$request->breakfast)
               ->orwhere('advanceseaches.beachfront',$request->beachfront)  
               ->orwhere('advanceseaches.airconditioning',$request->airconditioning)
               ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner)
               ->orwhere('advanceseaches.seaview',$request->seaview)
               ->orwhere('advanceseaches.bath',$request->bath)
               ->orwhere('advanceseaches.balcony',$request->balcony)
               ->orwhere('advanceseaches.spabath',$request->spabath)
               ->orwhere('advanceseaches.twinbeds',$request->twinbeds)
               ->orwhere('advanceseaches.kitchen',$request->kitchen)
               ->orwhere('advanceseaches.freewiFi',$request->freewifi)
               ->orwhere('advanceseaches.hiking',$request->hiking)
               ->orwhere('advanceseaches.walking',$request->walking)
               ->orwhere('advanceseaches.bicyclerental',$request->bicycle) 
               ->orwhere('advanceseaches.localculture',$request->localculture) 
               ->orwhere('advanceseaches.cookingclz',$request->Cooking)  
               ->orwhere('advanceseaches.withoutcredit',$request->creditcard)
               ->orwhere('advanceseaches.prepayment',$request->noprepayment)
               ->orwhere('advanceseaches.allmeals',$request->allmeals)
               ->orwhere('advanceseaches.inclusive',$request->allinclusive)
               ->orwhere('advanceseaches.breakfastlunch',$request->breakfastlunch)
               ->orwhere('advanceseaches.selfcatering',$request->selfcatering)  	 
               ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner) 
               ->orwhere('advanceseaches.airportshuttle',$request->airportshuttle)   
               ->orwhere('advanceseaches.parking',$request->parking)
               ->orwhere('advanceseaches.nonsmoking',$request->nonsmoking) 
               ->orwhere('advanceseaches.familyrooms',$request->familyrooms) 
               ->orwhere('advanceseaches.wellnesscenter',$request->wellnesscenter) 
               ->orwhere('advanceseaches.petsallowed',$request->pets) 
               ->orwhere('advanceseaches.electricvehiclecharg',$request->electricvehicle) 
               ->orwhere('advanceseaches.pool',$request->swimmingpool) 
               ->orwhere('advanceseaches.fitnesscenter',$request->fitnesscenter) 
               ->orwhere('advanceseaches.airconditioning',$request->conditioning)
               ->orwhere('advanceseaches.terrace',$request->terrace) 
               ->orwhere('advanceseaches.flat-screentv',$request->flatscreentv)  
               ->orwhere('advanceseaches.Washingmachine',$request->washing) 
               ->orwhere('advanceseaches.kettle',$request->kettle) 
               ->orwhere('advanceseaches.teamaker',$request->teamaker) 

      
           ->get(); 
           return $sql;  
       }


    //advance by destination
    public static function advancefilterdes($request){
         $sql= DB::table('hotels')
         ->select('hotels.*')
         ->leftjoin('advanceseaches','hotels.id', '=', 'advanceseaches.hotelid')
         ->where('hotels.destination',$request->typehide) 
         ->orwhere('advanceseaches.pool',$request->swimming) 
         ->orwhere('advanceseaches.bathroom',$request->privatebathroom)  
         ->orwhere('advanceseaches.breakfast',$request->breakfast)
         ->orwhere('advanceseaches.beachfront',$request->beachfront)  
         ->orwhere('advanceseaches.airconditioning',$request->airconditioning)
         ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner)
         ->orwhere('advanceseaches.seaview',$request->seaview)
         ->orwhere('advanceseaches.bath',$request->bath)
         ->orwhere('advanceseaches.balcony',$request->balcony)
         ->orwhere('advanceseaches.spabath',$request->spabath)
         ->orwhere('advanceseaches.twinbeds',$request->twinbeds)
         ->orwhere('advanceseaches.kitchen',$request->kitchen)
         ->orwhere('advanceseaches.freewiFi',$request->freewifi)
         ->orwhere('advanceseaches.hiking',$request->hiking)
         ->orwhere('advanceseaches.walking',$request->walking)
         ->orwhere('advanceseaches.bicyclerental',$request->bicycle) 
         ->orwhere('advanceseaches.localculture',$request->localculture) 
         ->orwhere('advanceseaches.cookingclz',$request->Cooking)  
         ->orwhere('advanceseaches.withoutcredit',$request->creditcard)
         ->orwhere('advanceseaches.prepayment',$request->noprepayment)
         ->orwhere('advanceseaches.allmeals',$request->allmeals)
         ->orwhere('advanceseaches.inclusive',$request->allinclusive)
         ->orwhere('advanceseaches.breakfastlunch',$request->breakfastlunch)
         ->orwhere('advanceseaches.selfcatering',$request->selfcatering)  	 
         ->orwhere('advanceseaches.breakfastdinner',$request->breakfastdinner) 
         ->orwhere('advanceseaches.airportshuttle',$request->airportshuttle)   
         ->orwhere('advanceseaches.parking',$request->parking)
         ->orwhere('advanceseaches.nonsmoking',$request->nonsmoking) 
         ->orwhere('advanceseaches.familyrooms',$request->familyrooms) 
         ->orwhere('advanceseaches.wellnesscenter',$request->wellnesscenter) 
         ->orwhere('advanceseaches.petsallowed',$request->pets) 
         ->orwhere('advanceseaches.electricvehiclecharg',$request->electricvehicle) 
         ->orwhere('advanceseaches.pool',$request->swimmingpool) 
         ->orwhere('advanceseaches.fitnesscenter',$request->fitnesscenter) 
         ->orwhere('advanceseaches.airconditioning',$request->conditioning)
         ->orwhere('advanceseaches.terrace',$request->terrace) 
         ->orwhere('advanceseaches.flat-screentv',$request->flatscreentv)  
         ->orwhere('advanceseaches.Washingmachine',$request->washing) 
         ->orwhere('advanceseaches.kettle',$request->kettle) 
         ->orwhere('advanceseaches.teamaker',$request->teamaker) 
         ->get(); 
         return $sql;  
     }



         //client 
    public static function facilitypage($id){
        $sql= DB::table('advanceseaches')
        ->select('*')
        ->where('hotelid',$id)
        ->get();
        return $sql;     
    }
}
