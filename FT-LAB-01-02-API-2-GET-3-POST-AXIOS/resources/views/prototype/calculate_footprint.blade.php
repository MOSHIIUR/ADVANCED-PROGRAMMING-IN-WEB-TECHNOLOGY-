
@extends('layouts.app')

@section ('title')
Calculate Footprint
@endsection

@section ('content')

<body>	
            <div class="container">
				<form class="normal" action="/homec" method="post">
                {{csrf_field()}}
                    <table class="normal">
                        <tr>
                            <td colspan="4"><img src="{{url('/image/'.'icon.png')}}" style="width: 200px; height:100px;"></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" class='login' name="travel" value='Travel'/></td>
                            <td><input type="submit" class='login' name="home" value='Home'/></td>
                            <td><input type="submit" class='login' name="food" value='Food'/></td>
                            <td><input type="submit" class='login' name="shopping" value='Shopping'/></td>
                            <td><input type="submit" class='login' name="total" value='View Footprint'/></td>
                        </tr>
                    
                    </table>

                    <table class="normal">
                        <tr>
                            <td>Private Vehicle</td>
                            <td><input type="number" placeholder="miles/year" name="p_transport"/></td>
                            <td>
                                <select>
                                    <option value="diesel">Diesel</option>
                                    <option value="gasoline">Gasoline</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Public Transport</td>
                            <td style="align-items: left;"><input type="number" placeholder="miles/year" name="p_transport"/></td>
                        </tr>

                        <tr>
                            <td>Air Travel</td>
                            <td><input type="number" placeholder="miles/year" name="p_transport"/></td>
                        </tr>
                    </table>

                    <input type="submit" class='login' name="next" value='NEXT'/>


                </form>

            </div>
</body>

								
@endsection
