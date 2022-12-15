<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prototypeController extends Controller
{
    function start(Request $request)
    {
        if($request->input('signup'))    
        {   
           return view('prototype.signup');
        }
				
	    if($request->input('login'))    
        {   
            return view('prototype.login');
        }

    }

    function service(Request $request)
    {
        if($request->input('calculate'))    
        {   
           return view('prototype.calculate_footprint');
        }
				
	    if($request->input('action'))    
        {   
            return view('prototype.take_action');
        }

	    if($request->input('other'))    
        {   
            return view('prototype.other_service');
        }

    }

    function calculate(Request $request)
    {
        if($request->input('travel'))    
        {   
           return view('prototype.calculate_footprint');
        }
				
	    if($request->input('home'))    
        {   
            return view('prototype.footprint_home');
        }

	    if($request->input('food'))    
        {   
            return view('prototype.footprint_food');
        }

        if($request->input('shopping'))    
        {   
            return view('prototype.footprint_shopping');
        }

        if($request->input('total'))    
        {   
            return view('prototype.your_footprint');
        }

    }
}
