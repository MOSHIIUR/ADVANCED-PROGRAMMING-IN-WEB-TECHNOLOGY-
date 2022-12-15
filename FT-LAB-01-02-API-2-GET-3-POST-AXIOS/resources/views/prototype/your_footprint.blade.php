
@extends('layouts.app')

@section ('title')
Home Footprint
@endsection

@section ('content')

<body>	
            <div class="container">

				<form class="normal" action="/calculate" method="post">
                {{csrf_field()}}

                    <table class="normal">
                        <tr>
                            <td colspan="4"><img src="{{url('/image/'.'icon.png')}}" style="width: 200px; height:100px;"></td>
                        </tr>
                        
                        <tr>
                            <td colspan="4"><div class="heading"><h1>Your Footprint</h1></div></td>
                        </tr>
                    </table>

                    <table class="normal">
                        <tr>
                            <td>
                                <h1>15</h1>tons Carbon emission/year
                                <h2>Total emission</h2>
                            </td> 
                            <td>
                                <h1>63%</h1>
                                <h2>Better than average</h2>
                            </td>
                        </tr>
                    </table>

                    <table class="normal">
                        <div class="heading"></div>
                            <tr>
                                <td><div class="heading">Home</div></td>
                                <td><div class="heading">Food</div></td>
                                <td><div class="heading">Travel</div></td>
                                <td><div class="heading">Shopping</div></td>
                                
                            </tr>

                        <tr>
                            <td>
                                <h1>3</h1> ton CO2 per/year
                                <h3>20% of total</h3>
                            </td>
                        <td>
                                <h1>9</h1> ton CO2 per/year
                                <h3>60% of total</h3>
                            </td>
                        <td>
                                <h1>2.55</h1> ton CO2 per/year
                                <h3>13% of total</h3>
                            </td>
                        <td>
                                <h1>0.45</h1> ton CO2 per/year
                                <h3>7% of total</h3>
                            </td>
                        </tr>

                    </table>


                </form>

            </div>


</body>

								





@endsection
