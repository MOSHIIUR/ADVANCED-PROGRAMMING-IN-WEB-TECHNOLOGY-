@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Add Service
@endsection

@section ('content')

<html>

<div class="container">
<body>
@if(session()->has('message'))
<h2 class="smsg" id="emsg_login">{{ session()->get('message') }}</h2>
@endif

	<form action="/add_service" method='post'>
	{{csrf_field()}}

	<table class="profile">

		<tr>
            <td>
				<div class="heading"><h1>ADD SERVICE</h1></div>
            </td>
        </tr>


		<tr>
			<td>
				<input type="text" placeholder="Service Name" name='name' value="{{old('name')}}">
				@if($errors->has('name'))
                        <p class="emsg" id="emsg">{{$errors->first('name')}}</p>
						@endif
			</td>
		</tr>
		<tr>
			<td>
				<textarea placeholder="Details" name="details" cols="80" rows="10" value="{{old('details')}}"></textarea>
		
				@if ($errors ->has('details'))
				<p class="emsg" id="emsg">{{$errors->first('details')}}</p>

				@endif
			</td>
		</tr>

			
				<tr>
					<td><input type="text" name='attribute_name' placeholder="Name your Attribute" value="{{old('attribute_name')}}">
					@if($errors->has('attribute_name'))
                        <p class="emsg" id="emsg">{{$errors->first('attribute_name')}}</p>
						@endif 
				</td>

					<td>
						<select name="attribute_type" value="{{old('attribute_type')}}">
							<option value="integer">Integer</option>
							<option value="string">String</option>
						</select>
						@if($errors->has('attribute_type'))
                        <p class="emsg" id="emsg">{{$errors->first('attribute_type')}}</p>
						@endif    
					</td>
					<td id="text-align-right"><input type="submit" class="add" name="add_attribute" value="Add Attribute"></td>

				</tr>
			</table>

			<table class="profile">
				<tr>
					@foreach($attributes as $attribute)
					
						<td colspan="1"><input type="checkbox" name="attribute_list[]" value="{{$attribute -> name}}">{{$attribute -> name}}</td>
					
					@endforeach
					@if($errors->has('attribute_list'))
                        <p class="emsg" id="emsg">{{$errors->first('attribute_list')}}</p>
						@endif
				</tr>
				
				<tr>
					<td id="text-align-left"><input type="submit"  name="add_table"	value="Add Service"></td>
				</tr>


			</table>
		
		</div>






</form>
	</body>
</div>
	

	
</html>

@endsection
