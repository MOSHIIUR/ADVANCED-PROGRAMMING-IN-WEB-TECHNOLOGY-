
@extends('layouts.app')

@section ('title')
Home Footprint
@endsection

@section ('content')

<body>	
            <div class="container">
				<form class="normal" action="/your-c" method="post">
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
                            <td>Goods</td>
                            <td><input type="number" name=""/></td>
                            <td>
                                <select>
                                    <option value="per/m">BDT/month</option>
                                    <option value="per/y">BDT/year</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Service</td>
                            <td><input type="number" name=""/></td>
                            <td>
                                <select>
                                    <option value="per/m">BDT/month</option>
                                    <option value="per/y">BDT/year</option>
                                </select>
                            </td>
                        </tr>

                        
                    </table>


                    <input type="submit" class='login' name="next" value='NEXT'/>


                </form>

            </div>
</body>

								
@endsection
