<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commute extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'enter',
        'exit',
       
    ];}
// public function getSalaryAttribute(){
//     //i have each persons entering time and exiting time and also i have some defined shifts
//     //i want to calculate the totall salary that each person recives while every shift has a diffrent price
//     //and a diffrent range of time
//     $commutes=commute::all();
//     foreach ($commutes as $commute) {
//        $total_salary=0;
//        foreach ($commutes->enter as  $i => $entry_time) {
//         $exit_time = $commute->exit[$i];
//         $hours_worked = ($exit_time - $entry_time) / 60;
//         $shift = shift::where('start', '<=', $entry_time)->where('end', '>=', $exit_time)
//         ->first();
//         if ($shift) {
//             $total_salary += $hours_worked * $shift->payment;
//         }
//        }
//        echo "Person {$commute->id} total salary: {$total_salary}" . PHP_EOL;
//     }
//     // $startTime=$this->enter;
//     // $endTime=$this->exit;
//     // $result=$endTime-$startTime;

//     // $salary=$this->payment;
// }}
// Assume you have a `Person` model and a `Shift` model ->commute and shifts
// with the following attributes:
// Person: id, entries (array of entry times), exits (array of exit times)->enter and exit
// Shift: id, start_time, end_time, price->start and end

// $people = Person::all();

// foreach ($people as $person) {
//     $total_salary = 0;
//     foreach ($person->entries as $i => $entry_time) {
//         $exit_time = $person->exits[$i];
//         $hours_worked = ($exit_time - $entry_time) / 60;
//         $shift = Shift::where('start_time', '<=', $entry_time)
//             ->where('end_time', '>=', $exit_time)
//             ->first();
//         if ($shift) {
//             $total_salary += $hours_worked * $shift->price;
//         }
//     }
//     echo "Person {$person->id} total salary: {$total_salary}" . PHP_EOL;
// }
// }
