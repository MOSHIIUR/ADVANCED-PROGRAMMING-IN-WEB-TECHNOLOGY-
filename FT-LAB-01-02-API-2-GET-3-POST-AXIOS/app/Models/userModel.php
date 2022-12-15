<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = 'adminprofile';
	public $timestamps = false;

	

}

class users extends Model
{
    protected $table = 'users';
	public $timestamps = false;


} 

class updateUserInfo extends Model
{
    protected $table = 'adminprofile';
	public $timestamps = false;

	protected $fillable = [
		'id', 'username', 'email', 'pass', 'phone'
	];

} 


?>