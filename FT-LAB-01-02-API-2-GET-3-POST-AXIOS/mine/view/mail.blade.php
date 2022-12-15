@extends('layouts.app')

@section ('title')
Login
@endsection

@section ('content')

<body>	
            <div class="container">
				<form class="login" action="/sendmail" method="post">
                    <h2>Send Us A Message</h2>
                    <table class="profile">
                        <tr>
                        {{csrf_field()}}

                            <td colspan="2">Tell Us Your name: </td>
                        </tr>

                        <tr>
                            <td><input type="text" placeholder="First Nmae" name`="fname"></td>
                            <td><input type="text" placeholder="Last Nmae" name="lname"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Enter Your mail: </td>
                        </tr>

                        <tr>
                            <td colspan="2"><input type="text" placeholder="abc@gmail" name="mail"></td>
                        </tr>
                    
                        <tr>
                            <td colspan="2">Enter Your Phn No: </td>
                        </tr>

                        <tr>
                            <td colspan="2"><input type="text" placeholder="013XXXXXXX" name="phone"></td>
                        </tr>
                    
                        <tr>
                            <td colspan="2">Message: </td>
                        </tr>

                        <tr>
                            <td colspan="2"><input type="text" placeholder="Write down your msg" name="msg"></td>
                        </tr>
                    
                        <tr>
                            <td colspan="2"><input type="submit" name="Send Message"></td>
                        </tr>
                    
                        <tr>
                            <td colspan="2">
                            @if ($message = Session::get('success'))
                                    <strong>{{ $message }}</strong>
                            @endif
                            </td>
                        </tr>
                    
                    
                    </table>




                </form>

            </div>
</body>


@endsection
