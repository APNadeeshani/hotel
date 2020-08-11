<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class availability extends Model
{
        //client 
        public static function loardavailability(){
            $sql= DB::table('availabilities')
            ->select('*')
            ->where('sts',1) 
            ->get();
            return $sql;     
        }
}
