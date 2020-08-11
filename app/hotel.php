<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class hotel extends Model
{

        //client 
        public static function loardhome(){
          $sql= DB::table('hotels')
          ->select('*')
          ->where('status',1) 
          //->where('budgets.head_id',$logedid)
          ->get();
          return $sql;     
      }
      //client 
      public static function loardhotels(){
        $sql= DB::table('hotels')
        ->select('hotels.*',DB::raw('destinations.name as namedes'))
        ->leftjoin('destinations','hotels.destination', '=', 'destinations.id')
        ->where('hotels.status',1) 
        //->where('budgets.head_id',$logedid)
        ->get();
        return $sql;     
    }

    //dayouting
    public static function loarddayouting(){
      $sql= DB::table('hotels')
      ->select('*')
      ->where('status',1) 
      ->where('dayout',1) 
      //->where('budgets.head_id',$logedid)
      ->get();
      return $sql;     
  } 


        //client 
        public static function typehotels($id){
          $sql= DB::table('hotels')
          ->select('hotels.*',DB::raw('destinations.name as namedes'))
          ->leftjoin('destinations','hotels.destination', '=', 'destinations.id')
          ->where('hotels.status',1) 
          ->where('hotels.type',$id )
          ->get();
          return $sql;     
      }

      
        //client 
        public static function destihotels($id){
          $sql= DB::table('hotels')
          ->select('hotels.*',DB::raw('destinations.name as namedes'))
          ->leftjoin('destinations','hotels.destination', '=', 'destinations.id')
          ->where('hotels.status',1) 
          ->where('hotels.destination',$id )
          ->get();
          return $sql;     
      }
      
          //client 
          public static function destihotelsadvancesrc($value){
            $sql= DB::table('hotels')
            ->select('*')
            ->where('status',1) 
            ->where('type',$value )
            ->get();
            return $sql;     
        }
        

            //hotel facility page 
            public static function hotelfas($id){
              $sql= DB::table('hotels')
              ->select('*')
              ->where('id',$id )
              ->get();
              return $sql;     
          }

}
