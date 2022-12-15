@extends('layouts.app')

@section ('title')
Login
@endsection

@section ('content')

<!-- <div id="login"></div>
<script src="{{ asset('/js/app.js') }}"></script>
 -->


<body>	

            <div class="container">
				<form class="login" action="/loginCheck" method="post">
                    <h2>Admin Login</h2>
                    <p id="intro">Login with your organizational ID and Password</p>
					@if(session()->has('message'))
                    <p class="emsg" id="emsg_login">{{ session()->get('message') }}</p>
					@endif
					{{csrf_field()}}
                    <div>
                        <input type="text" name="id" id='id' autofocus="autofocus" placeholder="User Name" value="{{old('id')}}"/><br>
						@if($errors->has('id'))
                        <p class="emsg" id="emsg">{{$errors->first('id')}}</p>
						@endif
					</div>
					<div>
                        <input type="password" name="pass" id='password' placeholder="password"/><br>
						@if($errors->has('pass'))
                        <p class="emsg" id="emsg">{{$errors->first('pass')}}</p>
						@endif
                    </div>
                        
                        <input type="submit" class='login' value='Login'/><br>

                </form>

            </div>
</body>


 
 @endsection
