@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Home
@endsection

@section ('content')
<html>
	<div class="container">
		<body>
			<div class="heading"><h1>UPDATE</h1></div>
			<form class="normal" method="post" action="update_profile" enctype="multipart/form-data">
			{{csrf_field()}}

				<label>ID:</label><br>
				<label>{{$user->id}}</label>
				<br>

				<label>User Name:</label><br>
				<input type="text" name='name' value="{{$user->username}}">
				@if($errors->has('name'))
				<p class="emsg" id="emsg">{{$errors->first('name')}}</p>
				@endif<br>

				<label>Mail:</label><br>
				<input type="email" name='mail' value="{{$user->email}}">
				@if($errors->has('mail'))
				<p class="emsg" id="emsg">{{$errors->first('mail')}}</p>
				@endif<br>


				<label>Add image</label><br>
				<img src="{{ url('public/image/'.$user->image) }}" class="circle">       

				<label><input type="file" required name="image"></label>
				<br>



				<label>Password:</label><br>
				<input type="Password" name='pass' value="{{$user->pass}}">
				@if($errors->has('pass'))
				<p class="emsg" id="emsg">{{$errors->first('pass')}}</p>
				@endif<br>

				<hr>

				<input type="submit" value="Update">

			</form>
		</body>
	</div>
	
	
</html>

@endsection
