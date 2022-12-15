@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Profile
@endsection

@section ('content')
<center>
<html>
    <div class="container">
        <body>
            <form action="/view_Profile_Info" method='get'>
                {{csrf_field()}}
                
                    <table class="list">

                        <tr>
                            <td colspan="2">
                            <div class="heading"><h1>Admin: {{$user->username}}</h1></div>
                            </td>
                        </tr>
                        
                        <!--    Image  -->
                        <tr>
                            <td colspan="2" align="center"><img src="{{ url('public/image/'.$user->image) }}" class="circle"></td>            
                        </tr>
                        
                        <!--    id  -->
                        <tr>
                            <td>ID:</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <!--    Username  -->
                        <tr>
                            <td>Name:</td>
                            <td>{{$user->username}}</td>
                        </tr>

                        <!--    Email  -->
                        <tr>
                            <td>Mail:</td>
                            <td>{{$user->email}}</td>
                        </tr>

                        <!--    Password  -->
                        <tr>
                            <td>Password:</td>
                            <td>{{$user->pass}}</td>
                        </tr>




                        <!--    information change -->
                            <tr>
                                <td><input type="submit" name="update" value="Update Profile"></td>
                            </tr>

                    </table>

            </form>
        </body>
    </div>
	
</html>

</center>
@endsection
