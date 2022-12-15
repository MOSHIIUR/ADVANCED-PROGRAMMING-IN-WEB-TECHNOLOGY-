@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Add Guide
@endsection

@section ('content')
<html>
<div class="container">
	<body>
			<form action="/add_guide" method='post'>
			{{csrf_field()}}
@if(session()->has('message'))
	<h2 class="smsg">{{ session()->get('message') }}</h2>
	@endif


		<table class="profile">
			
				<tr>
                            <td colspan="2">
							<div class="heading"><h1>Add Guidance</h1></div>
                            </td>
                </tr>
				<tr>
				<td>
					<select name="category" value="{{old('category')}}">
						<option value>Choose Category</option>
						<option value="Meal">Meal</option>
						<option value="Travel">Travel</option>
						<option value="Shopping">Shopping</option>
						<option value="Household">Household</option>
					</select>
					@if($errors->has('category'))
					<p class="emsg" id="emsg">{{$errors->first('category')}}</p>
					@endif
					
				</td>
				<td>
					<input type="text" placeholder="Titlle" name='title' value="{{old('title')}}">
					@if($errors->has('title'))
					<p class="emsg" id="emsg">{{$errors->first('title')}}</p>
					@endif
				</td>

			</tr>
			<tr>
				<td colspan="2">
					<textarea placeholder="Add Guidance" rows="4" cols="50" name="details" value="{{old('details')}}"></textarea>
					@if($errors->has('details'))
					<p class="emsg" id="emsg">{{$errors->first('details')}}</p>
					@endif
				</td>
			</tr>
<hr>
			<tr>
				<td colspan="2"><input type="submit" value="Add Guide"></td>
			</tr>
		</table>




		</form>
	</body>
</div>

	
</html>

@endsection
