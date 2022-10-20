<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\userModel;
use App\Models\updateUserInfo;
use DB;


class testController extends Controller
{
    function home()
    {
        return view('Home');
    }

    function login()
    {
        return view('login');
    }

    // function register($username)
    // {
    // 	return view('Home', ['username'=>$username, 'pass' => '1122']);
    // }


    function logincheck(Request $request) //http request
    {

        $user = DB::table('adminprofile')->where('id', $request->id)->first();
        
        if(trim($user->id) == trim($request->id) && trim($user->pass) == trim($request->pass))
           {
             
            $minutes = 3600;
            $response = new Response('Login Success');
            $response -> withCookie(cookie('user', $user->id, $minutes));
            return $response;
            //return view('confirm')->with('blade_key', 'value');;

            }
        
        else echo 'Wrong Credentials';

    	

    }

    function register(Request $request) //http request
    {
    	$this -> validate($request, //the validate 
    		[   'name' => 'required | min:10', 
                'pass' => 'required | regex:/[@$!%*#?&]/',
                'id' =>  'required  | digits:6',
                'mail' => 'required | string|regex:/(.*)@myemail\.com/i',
                'phone' => 'required  | digits:11'   
        ],
            [   'id.digits' => '6 digit is required',
               'phone.digits' => '11 digit is required',
                'pass.regex' => 'must contain one special character @$!%*#?&',
                'mail.regex' => 'mail format should be (.*)@myemail\.com'
        
        ]);

        if(isset($error))
        {
            $output = $request -> name;
            return $output;

        }

        else{
            $user = new userModel();
            $user->id= $request->id;
            $user->username= $request->name;
            $user->email= $request->mail;
            $user->pass= $request->pass;
            $user->phone= $request->phone;
            $user->save();
            return view('confirm');
    
        }

    	

    }

    function profile(Request $request) //http request
    {
        $value = $request->cookie('user');
        $user = DB::table('adminprofile')->where('id', $value)->first();

        return view('profile',
        [
            'id' => $user->id,
            'name' => $user->username,
            'mail' => $user->email,
            'pass' => $user->pass,
            'phone' => $user->phone,
        ]
        );
    }

    function viewProfileInfo(Request $request) //http request
    {
            DB::table('adminprofile') 
                    ->where('id', $request->cookie('user')) 
                    ->update(
                [   
                    'username' => $request->name,
                    
                    
                ]);

            return view('confirm');
    }

/*     public function setCookie(Request $request) {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'virat', $minutes));
        return $response;
     }
     public function getCookie(Request $request) {
        $value = $request->cookie('name');
        echo $value;
     } */


} 