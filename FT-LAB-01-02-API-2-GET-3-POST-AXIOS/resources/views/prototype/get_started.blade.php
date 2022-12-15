@extends('layouts.app')

@section ('title')
Get Started
@endsection

@section ('content')
    <body>
        <div class="container">
            <form action="start">
                <table style="width: 100%; border: none;">
                    <tr>
                        <td><img src="{{url('/image/'.'icon.png')}}" style="width: 100%;"></td>
                    </tr>
                    
                    <tr>
                        <td>Login to get all the service</td>
                    </tr>

                    <tr>
                        <td><input type="submit" class="login" name="signup" value="SIGN UP"></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" class="login" name="login" value="LOG IN"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
@endsection
