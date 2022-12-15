@extends('layouts.app')
@extends('layouts.master')

@section ('title')
@endsection

@section ('content')
<html>

<div class="container">
	<body>
			<div class="heading"><h1>Feedback</h1></div>
			<form action="/add_response" method='post'>
			{{csrf_field()}}

			<table class="profile">

				<tr>
					<td colspan="2"><textarea readonly rows="4" cols="50">{{$feedback -> f_feedback}}</textarea></td>
				</tr>
			</table>

			<table class="list">

				<tr>
					<td colspan="2"><textarea placeholder="Response" name="response" rows="4" cols="50"></textarea></td>
				</tr>

				<tr>
					<td><input type="submit" class="add" name="add_response" value="send Response"></td>
					<td><input type="submit" name="back" value="Back"></td>
				</tr>
                
			</table>

			
			</form>
		</body>
</div>	
</html>

@endsection
