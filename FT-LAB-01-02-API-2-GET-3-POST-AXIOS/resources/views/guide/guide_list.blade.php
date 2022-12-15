@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Guide
@endsection

@section ('content')
<html>
	<body>
        <div class="container">

                <form class="registration" action="/add_guide" method="get">
                {{csrf_field()}}
                    <table class="normal">

                        <tr>
                            <td colspan="2">
                            <div class="heading"><h1>Guides</h1></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <th>Title</th>
                        </tr>
                    
                        @foreach($guides as $guide)
                        <tr>
                            <td>{{$guide->name}}</td>
                            <td>{{$guide->title}}</td>
                            <td><a href="{{url('guide',$guide->id)}}">Delete</a></td>
                        </tr>
                        @endforeach	
                    <table>
                </form>
        </div>
        <div  id="text-align-right"><input type="submit" name="add_guide" value="ADD GUIDE"></div>

	</body>

	
</html>

@endsection
