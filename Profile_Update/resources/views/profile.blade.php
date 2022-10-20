@extends('layouts.app')

@section ('title')
Profile
@endsection

@section ('content')
<center>
<html>
	<body>
		<h1>Admin Profile</h1>
	<form action="/viewProfileInfo" method='post'>
	{{csrf_field()}}
	

	<label>ID:</label><br>
	<label><?php echo $id ?></label><br>


	<label>User Name:</label><br>
	<label><input type="text" name='name' value=<?php echo $name ?>></label><br>
	


	<label>Mail:</label><br>
	<label><input type="email" name='mail' value=<?php echo $mail ?>></label><br>
	



	<label>Phone:</label><br>
	<label><input type="text" name='phone' value=<?php echo $phone ?>></label><br>
	



	<label>Password:</label><br>
	<label><input type="Password" name='pass' value=<?php echo $pass ?>></label><br>
	


	

	<label><input type="submit" value="Update Info"></label>

</form>
	</body>
	
</html>

</center>
@endsection
