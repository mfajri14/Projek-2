<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    static function list_jadwal(){
		 return jadwal::all();
	}
}
