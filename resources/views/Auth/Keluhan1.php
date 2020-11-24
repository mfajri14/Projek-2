<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Keluhan;

class Keluhan1 extends Model
{
	protected $table='Keluhan1';
	public $timestamps=false;
	protected $fillable = [
        'name', 'alamat', 'telp', 'keluhan_sakit',
    ];
	
    static function tambah_keluhan($name, $alamat, $telp, $keluhan_sakit){
		Keluhan::create([
			"name" => $name,
			"alamat" => $alamat,
			"telp" => $telp,
			"keluhan_sakit" => $keluhan_sakit
		]);
	}
}
