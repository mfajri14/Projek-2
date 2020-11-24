<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 
	protected $primaryKey = 'id_user';
    protected $fillable = [
        'name', 'email', 'password','agama','jenis_kelamin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	static function tambah_user($name, $password, $email, $jenis_kelamin, $agama){
		
		User::create([
			"name" => $name,
			"email" => $email,
			"password" => bcrypt($password),
			"jenis_kelamin" => $jenis_kelamin,
			"agama" => $agama,
		]);
	}
	
	static function login_user($password, $email){
		$cek = Auth::attempt([
			"email" => $email,
			"password" => $password
		],true);
		
		return $cek;
	}
}
