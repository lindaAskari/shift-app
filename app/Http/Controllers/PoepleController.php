<?php

namespace App\Http\Controllers;

use App\Models\poeple;
use Illuminate\Http\Request;

class PoepleController extends Controller
{
    public function index(){
        $Poeples = poeple::all();

        return view('poeple.index' , compact('Poeples'));
    }




    public function create(){
        return view('Poeple.create');
    }
    public function store(Request $request)
    {

        $d=poeple::create([
            'user_id' => $request->user_id,
            'enter' => $request->enter ,
            'exit' => $request->exit ,
            
            
        ]);
        // dd($d);
      
        $Poeples=poeple::all();
        return view('Poeple.index', compact('Poeples'));
    }

    public function edit(poeple $poeple){
        return view('poeple.edit', compact('poeple'));
    }

    public function update(Request $request, poeple $poeple){
     
        $poeple->update([
            'enter' => $request->enter,
            'exit' => $request->exit 
        ]);
        $Poeples = poeple::all();
        return view('poeple.index', compact('Poeples'));

    }

    public function destroy(poeple $poeple){
       
        $poeple->delete();

        return redirect()->route('Poeple.index');

    }
}
