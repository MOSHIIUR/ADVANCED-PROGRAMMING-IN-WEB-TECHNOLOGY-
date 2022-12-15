@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Service
@endsection

@section ('content')

<html>
	<body>
        <div class="container">
			<form action="/service" method='get'>
                {{csrf_field()}}
                    <table class="list">
                        <tr>
                            <td>
                                <div class="heading"><h1>LIST OF SERVICES</h1></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Name</th>
                        </tr>
                    
						@foreach($services as $service)
                        <tr>
                            <td><a href="{{ url('', $service-> name) }}">{{$service -> name}}</td>
                            <td><a href="{{url('service',$service->id)}}" class="delete">Delete</a></td>

                        </tr>
                        @endforeach	
                    <table>
					<input type="submit" class="add" name="add_service" value="CREATE NEW">

                </form>
        </div>

	</body>

	
</html>
	 
@endsection
