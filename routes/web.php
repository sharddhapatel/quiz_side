<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\homecontroller;
use App\Http\Controllers\admin\quescontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[homecontroller::class,'intro']);

route::get('dashboard',[homecontroller::class,'dashboard']);
route::get('index',[homecontroller::class,'index']);
route::get('playnow',[homecontroller::class,'playnow']);
route::get('registration',[homecontroller::class,'registration']);
route::post('clientregistration',[homecontroller::class,'clientregistration']);
route::get('contact',[homecontroller::class,'contact']);
route::get('result',[homecontroller::class,'result']);
route::get('rules',[homecontroller::class,'rules']);
route::post('show',[homecontroller::class,'show']);
route::get('question',[homecontroller::class,'question']);


//***************Admin************
route::get('admin',[quescontroller::class,'login']);
route::post('clientlogin',[quescontroller::class,'clientlogin']);
route::get('logout',[quescontroller::class,'logout']);
Route::group(['middleware'=>'admin'],function()
{

route::get('showquestion',[quescontroller::class,'showquestion']);
route::get('addquestion',[quescontroller::class,'addques']);
route::post('insertfrom',[quescontroller::class,'insertfrom']);
route::get('deletequestion/{id}',[quescontroller::class,'deletequestion']);
route::get('editquestion/{id}',[quescontroller::class,'editquestion']);

});
