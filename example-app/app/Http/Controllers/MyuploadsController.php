<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyuploadsController extends Controller
{
    public function index(){
        return view('myuploads');
    }
}
