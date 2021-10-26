<?php

namespace App\Http\Controllers;


use Illuminate\http\Request;

class HomeController extends Controller
{
   public function index(){
       return view('home');
   }
}
