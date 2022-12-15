<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\userModel;



class userController extends Controller
{
    function users()
    {
        $users = DB::table('users')->get();
        return $users;
        //return view('user.user_list')->with('users', $users);

    }

    function register(Request $request)
    {

        $this -> validate($request, //the validate 
    		[   'name' => 'required | min:10', 
                'pass' => 'required | regex:/[@$!%*#?&]/',
                'id' =>  'required  | digits:6',
                'mail' => 'required | string|regex:/(.*)@myemail\.com/i',
        ],
            [   'id.digits' => '6 digit is required',
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

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/image'), $filename);
                $user['image']= $filename;
            }
            $user->save();
            return view('confirm');
            //return redirect()->route('images.view');

    
        }




    }



    function update_profile(Request $request)
    {
        $this -> validate($request, //the validate 
    		[   'name' => 'required | min:10',
                'pass' => 'required | regex:/[@$!%*#?&]/',
                'mail' => 'required | string|regex:/(.*)@myemail\.com/i',
        ],
            [   
                'pass.regex' => 'must contain one special character @$!%*#?&',
                'mail.regex' => 'mail format should be (.*)@myemail\.com'
        
        ]);

        if(isset($error))
        {
            $output = $request -> name;
            return $output;

        }

        else{




            DB::table('adminprofile')
            ->where('id', $request->cookie('user'))
            ->update(
            [
            'username' => $request->name,
            'email' => $request->mail,
            'pass' => $request->pass,           
            
            ]);
            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/image'), $filename);
                $user['image']= $filename;
                DB::table('adminprofile')
                ->where('id', $request->cookie('user'))
                ->update(
                [
                'image' => $filename,          
                
                ]);
            }
            return redirect('profile');

    
        }
    }

    function delete_user($id)
    {   
       // $id = $request -> id;
        DB::table('users')
            ->where('u_id', $id)
	       ->delete();

           //return redirect('users');
           $users = DB::table('users')->get();
            //return $id;

    }

    function view_Profile_Info(Request $request)
    {
        $user = DB::table('adminprofile')->where('id', $request->cookie('user'))->first();

                    

            return view('admin.update_profile')->with('user', $user);

    }
}
