<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\UploadPost;

class UploadpostController extends Controller
{
	public function index(){
		return view('uploadpost');
	}
   public function store(Request $request)
	{	
			$filename="";
		if($request->hasFile('uploadpost')){
			global $filename;
			$file = $request->file('uploadpost');
			$title= $request->posttitle;
			$extension = $file->getClientOriginalExtension();
			$filename = $title. '.' . $extension;
			$file->move('img/postimg', $filename);
			}
			DB::table('tbpost')->insert([
			'posttitle' => $request->posttitle,
			'postdesc' => $request->postdesc,
			'archive' => $request->archive,
			'image' => $filename,
		]);

		return redirect('/upload');
	}
}
