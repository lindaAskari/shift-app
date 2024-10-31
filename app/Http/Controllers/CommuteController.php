<?php

namespace App\Http\Controllers;

use App\Models\commute;
use App\Models\shift;
use Illuminate\Http\Request;

class CommuteController extends Controller
{

    public function index(){
        $commutes = commute::all();

        return view('commute.index' , compact('commutes'));
        
    }

    public function create(){
        return view('commute.create');
    }
    public function store(Request $request)
    {

        commute::create([
            // 'user' => $request->user_id,
            'enter' => $request->enter ,
            'exit' => $request->exit ,
            
        ]);
        $commutes = commute::all();
        return view('commute.index', compact('commutes'));
    }
    public function edit(commute $commute){
        return view('commute.edit', compact('commute'));
    }
    public function update(Request $request, commute $commute){
     
        $commute->update([
            'user' => $request->user_id,
            'enter' => $request->enter ,
            'exit' => $request->exit ,
           
        ]);
        $commutes = commute::all();
        return view('commute.index', compact('commutes'));

    }
    public function destroy(commute $commute){
       
        $commute->delete();

        return redirect()->route('Commute.index');

    }
    

}




 



   
  
   



   

