<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

class shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start',
        'end',
        'payment',
    ];
    // public function getHoursAttribute($value){
    //     $start1=$this->attributes['start'];
    //     $end1=$this->attributes['end'];
    //     $start=Carbon::parse($start1)->format('H');
    //     $end=Carbon::parse($end1)->format('H');
    //     $hours=[];
    //     for ($x=$start ; $x<=$end ; $x++) {
    //         array_push($hours , $x);
    //     }
    //     $result=implode(',' , $hours);
    //     return $result;

    // }
}
