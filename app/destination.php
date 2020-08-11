<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class destination extends Model
{
    //destination 
    public static function destinationloard(){
        $sql= DB::table('destinations')
        ->select('*')
        ->where('status',1) 
        //->where('budgets.head_id',$logedid)
        ->get();
        return $sql;     
    }

        //destination 
        public static function loarddestination(){
            $sql= DB::table('destinations')
            ->select('*')
           // ->where('status',1) 
            //->where('budgets.head_id',$logedid)
            ->get();
            return $sql;     
        }
        
    
}
