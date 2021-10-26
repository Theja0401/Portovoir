<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\UploadpostController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\MailManagementController; 
use App\Http\Controllers\EditProfileController; 
use App\Http\Controllers\MyuploadsController; 
use App\Http\Controllers\UploadProjectController; 
use App\Http\Controllers\ProjectsController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/about',[AboutController::class,'index']);
Route::get('/category',[CategoryController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/mail',[MailManagementController::class,'index']);
Route::get('/edit',[EditProfileController::class,'index']);
Route::get('/myuploads',[MyuploadsController::class,'index']);
Route::get('/uploadproject',[UploadProjectController::class,'index']);
Route::get('/projects',[ProjectController::class,'index']);

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);  

Route::get('/upload',[UploadpostController::class, 'index']);    
Route::post('/upload',[UploadpostController::class, 'store']);    
