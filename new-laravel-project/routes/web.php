<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

// use Illuminate\Http\Request;

Route::get('/my-route', function(){ //เอาไว้เข้าถึงตัวเว็บที่เราอยากจะแสดงผล ใน myfloder
    // return view('myroute');
    //        Key    =>  Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.homeworkDynamic',$data);
});

Route::post('/my-route', function(Request $req){
    return view('myroute');
});




Route::get('/my-controller', [MyController::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');
});

Route::resource('my-controller4' , MyController::class);

//Route -> web.php

Route::resource('titles', C_titles::class);

