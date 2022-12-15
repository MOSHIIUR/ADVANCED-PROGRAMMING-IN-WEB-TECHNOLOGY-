@extends('layouts.app') 	
@extends('layouts.master') 	

@section ('title')
Signup
@endsection

@section ('content')
<center>
<html>
	<div class="container">
	<body>
				<h1>Admin Registration Form</h1>
			<form action="/registration" method='post'>
			{{csrf_field()}}
			

			<label>ID:</label><br>
			<label><input type="text" name='id' value="{{old('id')}}"></label>
			@if($errors->has('id'))
			<p class="emsg" id="emsg">{{$errors->first('id')}}</p>
			@endif

			<label>User Name:</label><br>
			<label><input type="text" name='name' value="{{old('name')}}"></label>
			@if($errors->has('name'))
			<p class="emsg" id="emsg">{{$errors->first('name')}}</p>
			@endif

			<label>Mail:</label><br>
			<label><input type="email" name='mail' value="{{old('mail')}}"></label>
			@if($errors->has('mail'))
			<p class="emsg" id="emsg">{{$errors->first('mail')}}</p>
			@endif


			<label>Date of Birth:</label><br>
			<label><input type="date" name='dob' value="{{old('dob')}}"></label>
			
			@if ($errors ->has('dob'))
			<span class="">
					<strong>{{ $errors -> first('dob')}}</strong>
			</span>
			@endif<br>


			<label>Password:</label><br>
			<label><input type="Password" name='pass' value="{{old('pass')}}"></label>
			
			@if ($errors ->has('pass'))
			<span class="">
					<strong>{{ $errors -> first('pass')}}</strong>
			</span>
			@endif<br>

			

			<label><input type="submit" id="submit" value="Register"></label>

		</form>
			</body>
	</div>
	
</html>




</center>
@endsection
