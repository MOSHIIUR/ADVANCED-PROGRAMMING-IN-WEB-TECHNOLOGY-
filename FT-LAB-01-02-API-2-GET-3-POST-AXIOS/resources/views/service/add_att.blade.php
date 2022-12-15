@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Add Attribute
@endsection

@section ('content')
<center>
<html>
	<body>
	<form action="/add_attribute" method='post'>
	{{csrf_field()}}
	


	<label><h1>Add a Attribute</h1></label><br>


	<label>Attribute Name:</label><br>
	<label><input type="text" name='name' value="{{old('name')}}"></label>
	
	@if ($errors ->has('name'))
	<span class="">
			<strong>{{ $errors -> first('name')}}</strong>
	</span>
	@endif<br>


<label><input type="submit" value="Add"></label><br>
<label><h1>{{$msg}}</h1></label>


</form>
	</body>

	
</html>

</center>
@endsection
