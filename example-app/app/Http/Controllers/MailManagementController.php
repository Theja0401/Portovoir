<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailManagementController extends Controller
{
    public function index(){
        return view('mailmanagement');
    }
}
