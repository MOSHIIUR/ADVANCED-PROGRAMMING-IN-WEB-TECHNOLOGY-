@extends('layouts.app')
@extends('layouts.master')

@section ('title')
{{$service -> name}}
@endsection

@section ('content')
<center>
<html>

<div class="container">
	<body>
			<form action="/add_service" method='post'>
			{{csrf_field()}}

			<table class="list">
			<tr>
                            <td>
							<div class="heading"><h1>SERVICE: {{$service -> name}}</h1></div>
                            </td>
                        </tr>
				<tr>
					<th id="text-align-left">OPERATION</th>
				</tr>
				<tr>
					<td><textarea readonly rows="4" cols="50">{{$service -> details}}</textarea></td>
				</tr>
			</table>

			<table class="list">
				<tr>
					<th>SERVICE ATTRIBUTES</th>
				</tr>
				<tr>
					@foreach($attributes as $attribute)
					<td><li>{{$attribute->name}}</li></td>
					@endforeach
				</tr>
			</table>

			
			</form>
		</body>
</div>	
</html>

</center>
@endsection
