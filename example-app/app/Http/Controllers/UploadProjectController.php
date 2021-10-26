<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadProjectController extends Controller
{
    public function index(){
        return view('uploadpost');
    }
}
