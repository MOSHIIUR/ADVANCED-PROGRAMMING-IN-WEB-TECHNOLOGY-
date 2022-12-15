<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\service;
use App\Models\attribute;
use App\Models\guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class guideController extends Controller
{
    function guide()
    {
        $guides = guide :: all();
        return view('guide.guide_list')->with('guides', $guides);

    }

    function delete_guide(Request $request)
    {   
       DB::table('guides')
            ->where('id', $request->guide_id)
	       ->delete();

           return redirect('guide');

    }

    function add_guide(Request $request)
    {
        $name="login";
        session()->put("name",$name);


        $this -> validate($request, //the validate 
    		[   
                'category' =>  'required',
                'title' => 'required',
                'details' => 'required',
        ],
            [   'category.required' => 'Please choose a category',
                'title.required' => 'Give a title',
                'details.required' => 'Need some instruction',
        
        ]);   
        
    
            $name="insert";
            session()->put("name",$name);    
            $guide = new guide();

            $guide->name = $request->category;
            $guide->title = $request->title;
            $guide->details = $request->details;


            if($guide->save())
                return redirect()->back()->with('message', 'Successfully Added');
      
            

    }
}
