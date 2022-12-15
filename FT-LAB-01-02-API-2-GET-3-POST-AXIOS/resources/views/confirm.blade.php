@extends('layouts.app')

@section ('title')
Homepage
@endsection

@section ('content')

<div class="heading"><h1>GreenFoot: Admin</h1></p></div>
<div class="center"><h1>Welcome!{{$value}}</h1></p></div>


            <div class="background">
            
            <table class="home">
            
                <!--    image    -->
                <tr>
                    <td><img src="{{ url('public/image/user.png') }}"></td>
                    <td><img src="{{ url('public/image/admin.png') }}"></td>
                    <td><img src="{{ url('public/image/service.png') }}"></td>
                </tr> 
                
                <!--    text/href -->  
                <tr>
                    <td align="center"><a href="users">Users</a></td>
                    <td align="center"><a href="profile">Profile</a></td>
                    <td align="center"><a href="show_service_list">Services</a></td>

                </tr>

                <tr>
                    <td><img src="{{ url('public/image/dB.png') }}"></td>
                    <td><img src="{{ url('public/image/guide.png') }}"></td>
                    <td><img src="{{ url('public/image/logout.png') }}"></td>
                </tr> 
                


                <tr>
                    <td align="center"><a href="table_list">Database</a></td>
                    <td align="center"><a href="guide">Guide</a></td>
                    <td align="center"><a href="logout">Logout</a></td>

                </tr>

            
            
            </table>
            </div>
            <div class="footer">MAZUMDER, AKM MOSHIUR RAHMAN</div>

@endsection

