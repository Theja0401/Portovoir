<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\register;
Use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function index(){

		 return view("register");
	}
   public function store(Request $request)
	{
		
		DB::table('users')->insert([
			'email' => $request->email,
			'username' => $request->username,
			'password' => Hash::make($request->password),
		]);
		return redirect('/register');
	}
}
