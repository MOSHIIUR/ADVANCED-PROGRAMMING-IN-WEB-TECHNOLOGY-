<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = 'adminprofile';
	public $timestamps = false;

	protected $fillable = [
		'id', 'username', 'email', 'pass', 'phone'
	];

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