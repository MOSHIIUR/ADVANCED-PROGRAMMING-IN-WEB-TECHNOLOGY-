@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Guide
@endsection

@section ('content')
<html>
	<body>
        <div class="container">

                <form action="/add_response" method="post">
                {{csrf_field()}}
                    <table class="list">
                        <tr>
                            <td colspan="2">
                            <div class="heading"><h1>Feedbacks</h1></div>
                            </td>
                        </tr>
                        <tr>
                            <th>User ID</th>
                            <th>Feedback</th>
                        </tr>
                    
                        @foreach($feedbacks as $feed)
                        <tr>
                            <td>{{$feed->f_id}}</td>
                            <td>{{$feed->f_feedback}}</td>
<!--                             <td><a href="{{url('feed ',$feed->f_id )}}">Delete</a></td>
 -->                        
                            <td><a href="{{url('feed',$feed->f_id )}}">View</a></td>
                            </tr>
                        @endforeach	
                    <table>
                </form>
        </div>

	</body>

	
</html>

@endsection
