<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Essay;
use App\Models\EssayUpdate;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;


class EssayController extends Controller
{
    public function EssayIndex()
    {
        return view('essay_index');
    }


    public function EssayAdd(Request $request)
    {

        // dd($request->all());

        $essays = new Essay();

        $essays->title = $request->title;
        $essays->description_1 = $request->description_1;
        $essays->description_2 = $request->description_2;
        $essays->description_3 = $request->description_3;

        $essays->save();

        return redirect()->route('essay_index');
    }

    public function EssayAllShow()
    {

        $Alldatas = Essay::latest()->get();
        return view('show_allessay', compact('Alldatas'));
    }


    public function EssayDelete(string $id)
    {

        DB::table('essays')->where('id', $id)->delete();
        return redirect()->route('show_allessay');
    }


    // Edit form
    public function EssayEditForm(string $id)
    {

        $Allessays = DB::table('essays')->find($id);
        return view('update_essay', compact('Allessays'));
    }


    // // Update essay_updates
    public function EssayUpdate(Request $request, string $id)
    {


        $id =$request->id;
        $maxNo= EssayUpdate::where('sl_old', '=', $id)->max('updated_id')+1;

        $essay_updates = new EssayUpdate();

        $essay_updates->sl_old = $request->serial_old;
        $essay_updates->updated_id = $maxNo;
        $essay_updates->user = $request->user;
        $essay_updates->title = $request->title;
        $essay_updates->description_1 = $request->description_1;
        $essay_updates->description_2 = $request->description_2;
        $essay_updates->description_3 = $request->description_3;

        $essay_updates->save();

        
        // for serch edited part
        // $lastEssay = DB::table('essay_updates')->orderBy('id', 'desc')->first();

        // $Alleditdatas = EssayUpdate::get();

    //    dd($lastEssay->title);

        return redirect()->route('show_alleditessay');
        // return view('show_alleditessay',compact('lastEssay','Alleditdatas'));
    }


    public function EssayPrint(Request $request, string $id)
    {

        // dd($request);

        $data = Essay::FindOrFail($id);
        

        // dd($data);
        $pdf = Pdf::loadView('essay_report', compact('data'));
        // return $pdf->download('essay.pdf');
        return view ('essay_report',compact('data'));
    }
}
