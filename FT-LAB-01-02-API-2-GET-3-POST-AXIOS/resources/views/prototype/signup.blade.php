@extends('layouts.app')

@section ('title')
Sign Up
@endsection

@section ('content')
    <html>
        <div class="container">
            <body>
                

                <form class="registration" method="post" action="/login" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label>
                    <img src="{{url('/image/'.'icon.png')}}" style="width: 152px; height:72px;">
                    
                    </label><br>
                    
                    <label><input type="text" placeholder="user name" name='name' value="{{old('name')}}"></label><br>
                    @if($errors->has('name'))
                    <p class="emsg" id="emsg">{{$errors->first('name')}}</p>
                    @endif

                    <label><input type="email" placeholder="email" name='mail' value="{{old('mail')}}"></label><br>
                    @if($errors->has('mail'))
                    <p class="emsg" id="emsg">{{$errors->first('mail')}}</p>
                    @endif

                    <label><input type="text" placeholder="address" name='name' value="{{old('name')}}"></label><br>
                    @if($errors->has('name'))
                    <p class="emsg" id="emsg">{{$errors->first('name')}}</p>
                    @endif

                    <label><input type="number" placeholder="zip code" name='name' value="{{old('name')}}"></label><br>
                    @if($errors->has('name'))
                    <p class="emsg" id="emsg">{{$errors->first('name')}}</p>
                    @endif

                    <label><input type="Password" placeholder="password" name='pass' value="{{old('pass')}}"></label><br>
                    @if($errors->has('pass'))
                    <p class="emsg" id="emsg">{{$errors->first('pass')}}</p>
                    @endif


                    <label><input type="file" required name="image"></label>
                    <br>


                    

                    <label><input type="submit" value="Register" class="add"></label><br>
                    <p>Already have an account? <a href="">LOG IN</a></p>
                </form>
            </body>
        </div>
        
        
    </html>

@endsection
