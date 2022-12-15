<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\userModel;
use Illuminate\Support\Facades\Cookie;
use App\Models\updateUserInfo;
use App\Models\service;
use App\Models\attribute;
use App\Models\foodprint;
use Illuminate\Support\Facades\DB;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Mail;

class testController extends Controller
{
    
    function upc()
    {
        $foods = DB::table('foodprints')->get();
        return $foods;
        //return view('user.user_list')->with('users', $users);

    }
    
    function api()
    {
        $api = DB::table('apis')->get();
        return $api;
        //return view('user.user_list')->with('users', $users);

    }
    
    function sendmail($id)
    {
         $admin="greenfoot@abc.com";

         $api = DB::table('apis')
                ->where('id', $id)
                ->first();
         $mail = $api->mail;

        $val = '';
        for( $i=0; $i<10; $i++ ) {
           $val .= chr(rand(65, 90));
        }


        $data = array(
            'token'      =>  $val,
            'mail'  => $admin
        );

     Mail::to($mail)->send(new SendMail($data));
   
     DB::table('apis')
            ->where('id', $id)
	       ->delete();

           //return redirect('users');
    $apis = DB::table('apis')->get();
    return $apis;
     //return back()->with('success', 'Thanks for contacting us!');

    }

    

    function home(Request $request)
    {
        $value = $request->cookie('user');
        $user = DB::table('adminprofile')->where('id', $value)->first();
        return view('confirm', ['value' => $user->username]);
        
    }

    function login(Request $request)
    {
       return view('login');
    }

    function registrarion_blade()
    {
    	return view('admin.registration');
    }


    function logincheck(Request $request) //http request
    {
        $name="login";
        session()->put("name",$name);


        $this -> validate($request, //the validate 
    		[   
                'id' =>  'required  | digits:6',
                'pass' => 'required',
        ],
            [   'id.digits' => '6 digit is required',
                'pass.regex' => 'Please fill this field',
        
        ]);
        
        $user = DB::table('adminprofile')->where('id', $request->id)->first();

        if(empty($user->id)){
            return redirect()->back()->with('message', 'Wrong Credentials');
        }
        
        else {if((trim($user->id) == trim($request->id)) && (trim($user->pass) == trim($request->pass)))
           {
                session()->forget('name');
                $minutes = 3600;
                $cookie = Cookie::queue(Cookie::make('user', $user->id, $minutes));
                $value = $request->cookie('user');
                return redirect('homepage');

            }
        
        else return redirect()->back()->with('message', 'Wrong Credentials');
}
        
        
    	

    }



    public function generateToken()
    {
        $this -> api_token = Str::random(60);
        $this -> save();

        return $this -> api_token;
    }

    function register(Request $request) //$request obj contain all the data that has submitted
    {
        /*     	$this -> validate($request, //the validate 
    		[   'name' => 'required | string |max:100| min:10', 
                'pass' => 'required | regex:/[@$!%*#?&]/',
                'id' =>  'required  | digits:6',
                'mail' => 'required | string|regex:/(.*)@myemail\.com/i',
                'phone' => 'required  | digits:11'   
        ],
            [   'id.digits' => '6 digit is required',
                'name.required'=>'please inter the field',
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

            $user->id = $request->id;
            $user->username = $request->name;
            $user->email = $request->mail;
            $user->pass = $request->pass;
            $user->phone = $request->phone;

            $user->save();
            $user->generateToken();

            return view('confirm');
    
        }
        */

            $user = new userModel();

            $user->id = $request->id;
            $user->username = $request->name;
            $user->email = $request->mail;
            $user->pass = $request->pass;
            $user->phone = $request->phone;
            $user->image = $request->image;

            $user->save();
           // $user->generateToken();

            //return view('confirm');
            return $user;

    	

    }

    function insert_upc(Request $request) //$request obj contain all the data that has submitted
    {
        

            $user = new foodprint();

            $user->name = $request->name;
            $user->upc = $request->upc;
            $user->amount = $request->amount;
            $user->emission = $request->emission;
            $user->impact = $request->impact;
/*             if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/image'), $filename);
                $user['image']= $filename;
            } */

            $user->save();
           // $user->generateToken();

            //return view('confirm');
            return 'SUccess';

    	

    }

    function delete_upc($upc)
    {
 
           // $id = $request -> id;
            DB::table('foodprints')
                ->where('upc', $upc)
               ->delete();
    
               //return redirect('users');
               $upcs = DB::table('foodprints')->get();
                return $upcs;
    
        
    }

    function profile(Request $request) //http request
    {
        $value = $request->cookie('user');
        $user = DB::table('adminprofile')->where('id', $value)->first();

        return view('profile',compact('user'));

    }

    function profile_api(Request $request)
    {
        
        //$value = $request->cookie('user');
        $value = decrypt(Cookie::get('user'));

        //$value = Cookie::get('user');


        $user = DB::table('adminprofile')
                ->where('id',  $value)->first();
        return $user;
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

    function show_service_details(Request $request)
    {
        $service = service :: where('name' , $request->service_name)->first(); //eloquent
        $attributes = DB::table($request->service_name)->get();

        
        return view('service.service_details') -> with(compact('service', 'attributes'));
    }

    function show_service_list()
    {
        $services = service :: all();   //eloguent
        return view('service.services') -> with('services', $services);
    }



    function service()
    {
            $attributes = attribute :: all();   //eloquent
            
            return view('service.add_service')-> with('attributes', $attributes);

    }

    


    



} 