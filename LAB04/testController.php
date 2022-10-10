<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

class testController extends Controller
{
    function home()
    {
        return view('Home');
    }

    // function register($username)
    // {
    // 	return view('Home', ['username'=>$username, 'pass' => '1122']);
    // }


    function register(Request $request) //http request
    {
    	$this -> validate($request, //the validate 
    		[   'name' => 'required | min:10', 
                'pass' => 'required | regex:/[@$!%*#?&]/',
                'id' =>  'required  | digits:6',
                'mail' => 'required | string|regex:/(.*)@myemail\.com/i',
                'dob' => 'required  | date'   
        ],
            [   'id.digits' => '6 digit is required',
                'pass.regex' => 'must contain one special character @$!%*#?&',
                'mail.regex' => 'mail format should be (.*)@myemail\.com'
        
        ]);

    	$output.='name: '.$request -> name;
    	$output.='pass: '.$request -> pass;

    	return $output;
    }
} 