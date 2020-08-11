<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class wedding extends Model
{
    
        //wedding halls
        public static function wedding(){
            $sql= DB::table('weddings')
            ->select('weddings.*','hotels.name','hotels.map')
            ->leftjoin('hotels','hotels.id', '=', 'weddings.hotelid')  
            ->where('weddings.sts',1 )
            ->get();
            return $sql;     
        }

        //wedding halls
        public static function searchwedding($request){
            $sql= DB::table('weddings')
            ->select('weddings.*','hotels.name','hotels.map')
            ->leftjoin('hotels','hotels.id', '=', 'weddings.hotelid')  
            ->where('hotels.destination',$request->destn )
            ->where('weddings.sts',1 )
            ->get();
            return $sql;     
        }
  
}
