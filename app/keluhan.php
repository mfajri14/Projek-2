<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluhan extends Model
{
    protected $table='Keluhans';
	public $timestamps=false;
	protected $fillable = [
        'name', 'alamat', 'telp', 'keluhan_sakit',
    ];
}
