<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
        function sendmail(Request $request)
    {
        $admin="customercare@abc.com";

/*         $this->validate($request,
        ['name'=>'required', 
        'email' => 'email|required',
        'message' =>  'required']
        );
        if(isset($error))
        {
    return $output;
        } */
        $data = array(
            'fname'      =>  $request->fname,
            'lname'      =>  $request->lname,
            'mail'      =>  $request->mail,
            'phone'      =>  $request->phone,
            
            'message'   =>   $request->msg
        );

     Mail::to($admin)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }

}
