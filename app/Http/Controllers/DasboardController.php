<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\jadwal;
use \App\Keluhan;


class DasboardController extends Controller
{
    function home(){
		return view('home');
	}
    function logout(){
		Auth::logout();
		return redirect ("/");
	}	
	function jadwal(){
		$jadwals = jadwal::all();
		// return $jadwal;
		return view('jadwal')->with('jadwals', $jadwals);
		
	}
	public function keluhan(){
		$dokter = jadwal::pluck('name');
		return view('keluhan')->with('dokter',$dokter);
	}
	public function postkeluhan(Request $request){
		Keluhan::create([
			"name" => ($request->input('name')),
			"alamat" => ($request->input('alamat')),
			"telp" => ($request->input('telp')),
			"keluhan_sakit" => ($request->input('keluhan_sakit'))
		]);
		return redirect('keluhan');
		
	}
	
}
