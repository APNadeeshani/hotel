<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class client extends Model
{
    //client 
    public static function clientload(){
        $sql= DB::table('clients')
        ->select('*')
        ->where('status',1) 
        //->where('budgets.head_id',$logedid)
        ->get();
        return $sql;     
    }
    //client 
    public static function loarddestination(){
        $sql= DB::table('clients')
        ->select('*')
       // ->where('status',1) 
        //->where('budgets.head_id',$logedid)
        ->get();
        return $sql;     
    }

    
}
