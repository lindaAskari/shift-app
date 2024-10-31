<?php

namespace App\Http\Controllers;

use App\Models\shift;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShiftController extends Controller
{

    public function main(){
        return view('main');
    }
    public function index(){
        $shifts = shift::all();

        return view('shift.index' , compact('shifts'));
    }




    public function create(){
        return view('Shift.create');
    }
    public function store(Request $request)
    {
        //شرطی را بنویسیم که تداخل زمانی را متوجه بشود
        // $shifts = shift::all();
        //تایمی که قبلا وارد شده و از دیتا بیس داریم
        // $newStart=Carbon::parse($request->start)->format('H');
        // $newEnd=Carbon::parse($request->end)->format('H');
        // foreach ($shifts as $shift) {
        //     //تایمی که طرف وارد میکنه
        //     $start=Carbon::parse($shift->start)->format('H');
        //     $end=Carbon::parse($shift->end)->format('H');
            
        //     if ($start<$newStart && $newStart<$end) {
        //         abort(404);
        //     }
           
        // }
        // foreach ($shifts as  $shift) {
        //     $enter=Carbon::parse($shift->start)->format('H');
        //     $exit=Carbon::parse($shift->end)->format('H');


        //     $array=[];

        //     for($enter; $enter<$exit ; $enter++ ){
        //         array_push($array , $enter);
        //         dd($array);
        //     }
            
        // }
        ////second way:
        $shifts=shift::where('start' , '<' , $request->start)->where('end' , '>' , $request->end)->count();
        $times=shift::where('start' , '>' , $request->start)->where('start' , '<' , $request->end)->count(); 
        $records=shift::where('end' , '>' , $request->start)->where('end' , '<' , $request->end)->count();       
        $boxes=shift::where('start' , '>' , $request->start)->where('end' , '<' , $request->end)->count();       

       if ($shifts==0&& $times==0 && $records==0 && $boxes==0) {
        shift::create([
            'name' => $request->name,
            'start' => $request->start ,
            'end' => $request->end ,
            'payment' => $request->payment,
            
        ]);
       }else{
        return (' u can not add this shift the timing is not ok');
       }
       $shifts= shift::all();
        return view('shift.index', compact('shifts'));
    }

    public function edit(shift $shift){
        return view('shift.edit', compact('shift'));
    }

    public function update(Request $request, shift $shift){
     
        $shift->update([
            'name' => $request->name,
            'start' => $request->start ,
            'end' => $request->end ,
            'payment' => $request->payment,
           
        ]);
        $shifts = shift::all();
        return view('shift.index', compact('shifts'));

    }

    public function destroy(shift $shift){
       
        $shift->delete();

        return redirect()->route('Shift.index');

    }
}
