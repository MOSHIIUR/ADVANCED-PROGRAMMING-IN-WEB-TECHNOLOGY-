@extends('layouts.app')

@section ('title')
Login
@endsection

@section ('content')
<center>
<html>
	<body>
		<h1>Admin Login</h1>
	<form action="/loginCheck" method='post'>
	{{csrf_field()}}
	

	<label>ID:</label><br>
	<label><input type="text" name='id' value="{{old('id')}}"></label><br>
	

	<label>Password:</label><br>
	<label><input type="Password" name='pass' value="{{old('pass')}}"></label><br>
	

	<label><input type="submit" value="Login"></label>

</form>
	</body>
	
</html>

</center>
@endsection
