
@extends('layouts.app')

@section ('title')
Login
@endsection

@section ('content')

<body>	

            <div class="container">
				<form action="/home" method="post">
                {{csrf_field()}}

                    <table style="width: 100%; border: none;">
                        <tr>
                            <td><img src="{{url('/image/'.'icon.png')}}" style="width: 200px; height:100px;"></td>
                        </tr>
                        
                        <tr>
                            <td><label>LOG IN</label></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="id" id='id' autofocus="autofocus" placeholder="User Name" value="{{old('id')}}"/></td>
                        </tr>
                        
                        <tr>
                            <td><input type="password" name="pass" id='password' placeholder="password"/></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" class='login' value='Login'/></td>
                        </tr>
                    <tr>
                            <td>Create an account? <a href="">SIGN UP</a></td>
                        </tr>
                    </table>

                </form>

            </div>
</body>

								
@endsection
