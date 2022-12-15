<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\service;
use App\Models\attribute;


use Illuminate\Http\Request;

class serviceController extends Controller
{
    function delete_service(Request $request)
    {   
       DB::table('services')
            ->where('id', $request->service_id)
	       ->delete();

           return redirect('show_service_list');

    }

    function add_service(Request $request)
    {
        if($request->input('add_table'))    
        {   
            

            $service = new service();

            $service->name = $request->name;
            $service->details = $request->details;
            $service->save();

            return $this -> create_tabel($request->name, $request->attribute_list);
        }

        if($request->input('add_attribute'))
        {
            $this -> validate($request, //the validate 
                [   
                    'attribute_name' =>  'required',
                    'attribute_type' => 'required',
                ],
                [   'attribute_type.required' => 'Please choose a type',
                    'attribute_name.required' => 'Give a Name',
            
                ]); 
            
            $name="insert";
            session()->put("name",$name);

            $attribute = new attribute();

            $attribute->name = $request->attribute_name;
            $attribute->type = $request->attribute_type;
            $attribute->save();

            return redirect('service')->with('message', 'Success');

        }

    }
}
