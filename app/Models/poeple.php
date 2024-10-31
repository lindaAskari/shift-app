<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poeple extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'enter',
        'exit',
       
    ];

    public function getSalaryAttribute($value){
        $shifts=shift::all();
        $date=Carbon::now()->format('Y-m-d');
        $salary=0;
        $enterString= str($date. ' ' .$this->attributes['enter']);
        $enter=strtotime($enterString);
        $exitString=str($date . ' ' .$this->attributes['exit']);
        $exit= strtotime($exitString);

        foreach ($shifts as $shift) {
            $startString=str($date . ' ' . $shift->start);
            $endString=str($date . ' ' . $shift->end);
            $start=strtotime($startString);
            $end=strtotime($endString);
            if($exit > $start && $enter < $end) {
                $start2= max($enter , $start);
                $end2= min($exit , $end);
                $ekhtelaf= $end2 - $start2 ;
                $worked= $ekhtelaf / 60 / 60;
                $salary += $worked * $shift->payment;
            }

            
        }

        return $salary;

    }
}
