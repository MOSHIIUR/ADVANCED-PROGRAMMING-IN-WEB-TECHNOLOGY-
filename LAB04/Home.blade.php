@extends('layouts.app')

@section ('title')
Home
@endsection

@section ('content')
<center>
<html>
	<body>
		<h1>Admin Registration Form</h1>
	<form action="/registration" method='post'>
	{{csrf_field()}}
	

	<label>ID:</label><br>
	<label><input type="text" name='id' value="{{old('id')}}"></label>
	
	@if ($errors ->has('id'))
	<span class="">
			<strong>{{ $errors -> first('id')}}</strong>
	</span>
	@endif<br>

	<label>User Name:</label><br>
	<label><input type="text" name='name' value="{{old('name')}}"></label>
	
	@if ($errors ->has('name'))
	<span class="">
			<strong>{{ $errors -> first('name')}}</strong>
	</span>
	@endif<br>

	<label>Mail:</label><br>
	<label><input type="email" name='mail' value="{{old('mail')}}"></label>
	
	@if ($errors ->has('mail'))
	<span class="">
			<strong>{{ $errors -> first('mail')}}</strong>
	</span>
	@endif<br>


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

	

	<label><input type="submit" value="Submit"></label>

</form>
	</body>
	
</html>

</center>
@endsection
