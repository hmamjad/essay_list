<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EssayUpdate;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;


class EssayUpdateController extends Controller
{
    
// show
    public function EssayEditAllShow()
    {

        $Alleditdatas = EssayUpdate::get();
       
        return view('show_alleditessay',compact('Alleditdatas'));
    }


// delete
    public function Edit_EssayDelete(string $id)
    {

        DB::table('essay_updates')->where('id', $id)->delete();
        return redirect()->route('show_alleditessay');
    }



       // Edit form
       public function EditEssayEditForm(string $id)
       {
   
           $Alleeditssays = DB::table('essay_updates')->find($id);
           return view('update_edited_essay', compact('Alleeditssays'));
       }
   
   
       // // Update essay_updates
       public function EditEssayUpdate(Request $request, string $id)
       {


        DB::table('essay_updates')->where('id',$id)->update([

         'user' => $request->user,
          'title'=> $request->title,
           'description_1' => $request->description_1,
          'description_2' => $request->description_2,
          'description_3' => $request->description_3
   
        ]);
        return redirect()->route('show_alleditessay');
        
       }



       public function EditEssayPrint(Request $request, string $id)
       {
   
           // dd($request);
   
           $data = EssayUpdate::FindOrFail($id);
           
   
           // dd($data);
           $pdf = Pdf::loadView('essay_report', compact('data'));
           // return $pdf->download('essay.pdf');
           return view ('essay_report',compact('data'));
       }
   

}
