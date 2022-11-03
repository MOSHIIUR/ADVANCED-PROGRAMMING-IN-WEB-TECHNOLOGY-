<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\userModel;
use Illuminate\Support\Facades\Cookie;
use App\Models\updateUserInfo;
use DB;


class testController extends Controller
{
    function home(Request $request)
    {
        $value = $request->cookie('user');
        return view('confirm', ['value' => $value]);
        
    }

    function login()
    {
        return view('login');
        //return view('file-name') --> this will go to view and access the view the file content
        
        //---------------------------------------------------passing data from controller to blade-----
        //return view('login', ['id' => '42619' , 'pass' => 'qaz']);
        //return view('file-name', ['key' => 'Value' , 'key' => 'Value']));

    }

    function registrarion_blade()
    {
    	return view('registration');
    }


    function logincheck(Request $request) //http request
    {

        $this -> validate($request, //the validate 
    		[   
                'id' =>  'required  | digits:6',
                'pass' => 'required',
        ],
            [   'id.digits' => '6 digit is required',
                'pass.regex' => 'Please fill this field',
        
        ]);
        
        $user = DB::table('adminprofile')->where('id', $request->id)->first();
        
        if(trim($user->id) == trim($request->id) && trim($user->pass) == trim($request->pass))
           {
             
            //$response = new Response('Login Success');
            //$response -> withCookie(cookie('user', $user->id, $minutes));
            //return $response;

            $minutes = 3600;
            $cookie = Cookie::queue(Cookie::make('user', $user->id, $minutes));
            $value = $request->cookie('user');
            return redirect('homepage');

            }
        
        else echo 'Wrong Credentials';

    	

    }

    function register(Request $request) //$request obj contain all the data that has submitted
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

    function logout()
    {
        Cookie::queue(Cookie::forget('user'));
        return redirect('home');
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