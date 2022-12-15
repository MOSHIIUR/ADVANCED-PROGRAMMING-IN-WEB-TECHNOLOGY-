<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class feedbackController extends Controller
{
    function feedback()
    {
        //$feedbacks = feedback :: all();
        $feedbacks = DB::table('feedbacks')->where('mark', 0)->get();
        return view('feedback.show_feedback')->with('feedbacks', $feedbacks);

    }
    function view_feedback(Request $request)
    {
        //$feedbacks = feedback :: all();
        $feedback = DB::table('feedbacks')->where('f_id', $request->f_id)->first();
        session()->put('f_id', $request->f_id);
        return view('feedback.response')->with('feedback', $feedback);

    }
    function add_response(Request $request)
    {
        if($request->input('add_response'))
        {
            //$feedbacks = feedback :: all();
         $value = session()->pull('f_id');

        DB::table('feedbacks')
                    ->where('f_id', $value)
                    ->update(['f_response' => $request->response, 'mark'=>1]);

        session()->forget('f_id');

    
            return redirect('feedbacks');
        }

        if($request->input('back'))
            return redirect('feedbacks');


            
            

    }
}
