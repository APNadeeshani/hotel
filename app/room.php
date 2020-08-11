<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    //hotel facility page 
    public static function roomfas($id){
    $sql= DB::table('rooms')
    ->select('*')
    ->where('hotelid',$id )
    ->where('sts',1) 
    ->get();
    return $sql;     
}
}
