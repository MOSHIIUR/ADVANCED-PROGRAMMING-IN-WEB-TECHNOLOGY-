
@extends('layouts.app')

@section ('title')
Home Footprint
@endsection

@section ('content')

<body>	
            <div class="container">
				<form class="normal" action="/shop-c" method="post">
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
                            <td>Animal Based Product: Meat, Fish, Eggs, Dairy</td>
                            <td>
                                <select>
                                    <option value="never">Never</option>
                                    <option value="ocasionally">Ocasionally</option>
                                    <option value="often">Often</option>
                                    <option value="always">Always</option>
                                </select>
                            </td>
                        </tr>

                        
                        <tr>
                            <td>Grains & Baked Goods</td>
                            <td>
                                <select>
                                    <option value="never">Never</option>
                                    <option value="ocasionally">Ocasionally</option>
                                    <option value="often">Often</option>
                                    <option value="always">Always</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td>Fruits & Vegetables</td>
                            <td>
                                <select>
                                    <option value="never">Never</option>
                                    <option value="ocasionally">Ocasionally</option>
                                    <option value="often">Often</option>
                                    <option value="always">Always</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td>Drinks & Snacks </td>
                            <td>
                                <select>
                                    <option value="never">Never</option>
                                    <option value="ocasionally">Ocasionally</option>
                                    <option value="often">Often</option>
                                    <option value="always">Always</option>
                                </select>
                            </td>
                        </tr>



                    </table>


                    <input type="submit" class='login' name="next" value='NEXT'/>


                </form>

            </div>
</body>

								
@endsection
