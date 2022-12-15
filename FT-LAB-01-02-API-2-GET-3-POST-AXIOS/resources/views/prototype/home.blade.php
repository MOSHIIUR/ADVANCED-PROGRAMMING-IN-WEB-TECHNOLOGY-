
@extends('layouts.app')

@section ('title')
Home
@endsection

@section ('content')

<body>	
            <div class="container">
				<form class="registration" action="service" method="post">
                {{csrf_field()}}
                    <table style="width: 100%; border: none;">
                        <tr>
                            <td><img src="{{url('/image/'.'icon.png')}}" style="width: 200px; height:100px;"></td>
                        </tr>
                        <tr>
                            <!-- <td><input type="submit" class='login' name="calculate" value='Calculate Footprint'/></td> -->
                            <td>
                                <div id='example'></div>
                                <script src="{{ asset('/js/app.js') }}"></script>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" class='login' name="action" value='Take Actions'/></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" class='login' name="other" value='Other Services'/></td>
                        </tr>
                    
                    </table>

                </form>

            </div>
</body>

								
@endsection
