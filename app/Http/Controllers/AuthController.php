<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class AuthController extends Controller
{
    public function getlogin(){
		return view("login");
	}

    public function postlogin(Request $request){
		$email = $request->email;
		$password = $request->password;
		$cek = User::login_user($password, $email);
		if($cek){
			return redirect("/home");
		}else{
			return back()->with("error","E-Mail dan Password salah");
		}
	}	
    public function getregister(){
		return view("register");
	}
    
	public function postregister(Request $request){
		$rules = [
			"name" => "required",
			"email" => "required|email|unique:users,email",
			"jenis_kelamin" => "required",
			"agama" => "required",
			"password" => "required",
			"confirm_password" => "required|same:password",
		];
		$attributes = [
			"name" => "Nama Anda",
			"email" => "E-Mail Anda",
			"password" => "Password Anda",
			"confirm_password" => "Ulangi Password",
		];
		$messages = [
			"required" => ":attribute harus diisi",
			"email" => ":attribute harus diisi dengan format email yang valid",
			"same" => ":attribute harus sama dengan :other"
		];
		
		$this->validate($request,$rules,$messages,$attributes);
		$name= $request->name;
		$password= $request->password;
		$email= $request->email;
		$agama= $request->agama;
		$jenis_kelamin= $request->jenis_kelamin;
		User::tambah_user($name, $password, $email, $jenis_kelamin, $agama);
		
		return back()->with("sukses","Data anda berhasil didaftarkan");
	}
}
