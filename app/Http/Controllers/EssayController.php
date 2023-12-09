<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Essay;

class EssayController extends Controller
{
    public function EssayIndex(){
        return view('essay_index');
    }


    public function EssayAdd(Request $request){

        // dd($request->all());

        $essays = new Essay();

        $essays->title = $request->title;
        $essays->description_1 = $request->description_1;
        $essays->description_2 = $request->description_2;
        $essays->description_3 = $request->description_3;

        $essays->save();

        return redirect()->route('essay_index');

    }

    public function EssayAllShow(){

        $Alldatas = Essay::latest()->get();
        return view('show_allessay',compact('Alldatas'));
      
    }




}
