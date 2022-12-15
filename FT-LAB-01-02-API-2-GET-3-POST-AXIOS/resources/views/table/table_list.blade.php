@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Table
@endsection

@section ('content')
<html>
	<body>
        <div class="container">

                <form action="/table" method="get">
                {{csrf_field()}}
                    <table class="list">
                        <tr>
                            <td colspan="2">
                            <div class="heading"><h1>List of Table</h1></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <th>Title</th>
                        </tr>
                    
                        @foreach($tables as $table)
                        <tr>
                            <td>{{$table->name}}</td>
                            <td><a href="{{url('table', $table->name)}}">Delete</a></td>
                        </tr>
                        @endforeach	
                    <table>
                </form>
        </div>
        <div  id="text-align-right"><input type="submit" name="add_table" value="ADD TABLE"></div>

	</body>

	
</html>

@endsection
