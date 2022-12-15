<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\service;
use App\Models\attribute;
use Validator;
use App\Models\guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableController extends Controller
{
    //
    function create_tabel($table_name, $fields=[])
{
    Schema::create($table_name, function(Blueprint $table) use 
    ($fields, $table_name)
    {
        $table->increments('id');
        $table->string('name');

    });

    foreach ($fields as $field){

    DB::table($table_name)->insert( ['name'=> $field]);
    
            
    };
    DB::table('tables')->insert( ['name'=> $table_name]);
    
    $attributes = attribute :: truncate();
    $attributes = attribute :: all();
    return redirect('service')->with('message', 'Service has added');

    
}

function add_table($table_name, $fields=[])
{
    //creating a session of table is creating
    session()->forget('name');
    $name="insert";
    session()->put("name",$name);

    Schema::create($table_name, function(Blueprint $table) use 
    ($fields, $table_name)
    {
        $table->increments('id');
        $table->string('name');

        if(count($fields)>0){
            foreach ($fields as $field){
                $type = $field->type;
                $table->$type($field->name);
            }
        }
    });

    DB::table('tables')->insert( ['name'=> $table_name]);

    $attributes = attribute :: truncate();
    $attributes = attribute :: all();
    //return view('table.add_table',['msg' => 'Table Added'])->with('attributes', $attributes);
    return redirect ('table')->with('message', 'Table Added');
    
}

function add_service(Request $request)
{
    if($request->input('add_table'))    
    {   
        $this -> validate($request, //the validate 
    		[   
                'name' =>  'required',
                'details' => 'required',
                'attribute_list' => 'required',
             ],
            [   'details.required' => 'Put some details',
                'name.required' => 'Give a Name',
                'attribute_list.required' => 'Select attributes',
        
            ]);

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


function add_attribute(Request $request)
{
        $attribute = new attribute();

        $attribute->name = $request->name;


        if($attribute->save())
            return view('service.add_att', ['msg' => 'A D D E D!']);
        
        else return view('service.add_att', ['msg' => 'F A I L E D!']);

}

function add_attribute_dB_table(Request $request)
{
    
    $data = $request->all();
    $json = $request->name;
    $form = $request->form; //store the value of submit button. attribute or

    //return response()->json(['name'=> $request->name]);



    if ($form == 'attribute') {

        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'type' => 'required',
        ],
        [   
            'type.required' => 'Please choose a type',
            'name.required' => 'Give a Name',
    
        ]);


            if ($validator->passes()) {
            //return response()->json(['success'=>'Added new records.']);
            $attribute = new attribute();

            $attribute->name = $request->name;
            $attribute->type = $request->type;
            $attribute->save();
            $attributes = attribute :: all('name'); 
            //return view('table.add_table', ['msg' => ''])-> with('attributes', $attributes); 
             return response()->json(['attributes'=>$attributes]);

            }
            return response()->json(['error'=>$validator->errors()->all()]);
            








       /*  $attribute = new attribute();

        $attribute->name = $request->name;
        $attribute->type = $request->type;
        $attribute->save();
        $attributes = attribute :: all(); 
        
        //return view('table.add_table', ['msg' => ''])-> with('attributes', $attributes); 
        return response()->json(['name'=> $request->file('name') ]); */
        return response()->json(['name'=> $request->name]);


    }

/*   
    if ($form == 'table')
    {   
        
        $this -> validate($request,
    		[   
                'name' =>  'required',
                'attribute_list' =>  'required',
             ],
            [   
                'name.required' => 'dB Table name is needed',
                'attribute_list.required' => 'Select a attribute',
        
            ]);
        

        $attributes = $request->attribute_list;
        foreach($attributes as $attribute)
            {$field[] = DB::table('attributes')->where('name', $attribute)->first();}

        return $this -> add_table($request->name, $field);
        
    }

 */   

}

function table()
{
        $attributes = attribute :: all();
        return view('table.add_table', ['msg' => '']) -> with('attributes', $attributes);
        

}

function table_list()
{
    $tables = DB::table('tables')->get();
    return view('table.table_list') -> with('tables', $tables);
        

}

function delete_table(Request $request)
{
    $value = $request->table_name;
    Schema::drop($value);
    DB::table('tables')
            ->where('name', $value)
	       ->delete();

    return redirect('table_list');

}





}



