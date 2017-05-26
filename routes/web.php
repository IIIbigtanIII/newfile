<?php

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
	echo realpath(base_path('resources/view'));
    return view('welcome');
});

Route::get('admin', function () {
    echo "welcome my lord";
});

Route::get('admin/{name}', function ($name) {
    echo "<h2>welcome my lord</h2>"."<h1>$name</h1>"."<h2>the king of IT land</h2>";
})->where(['name'=>'[0-9]+']);
//định danh route
Route::get('ad', function () {
    echo "welcome my lord";
})->name('myroute');
Route::get('call', function () {
    return redirect()->route('myroute');
}); 
//group
Route::group(['prefix'=>'mygroup'],function(){
	Route::get('admin1', function () {
    echo "welcome my lord1";
	});
	Route::get('admin2', function () {
    echo "welcome my lord2";
	});
	Route::get('admin3', function () {
    echo "welcome my lord3";
	});
});
//goi controller
Route::get('call_controller','mycontroller@sayhiboss');
Route::get('call_name_boss/{name}','mycontroller@sayhitheboss');
Route::get('myrequest','mycontroller@showPath');
//gửi dữ liệu 

Route::get('getform',function(){
	return view('postform');
});

Route::post('postform',['as'=>'postform','uses'=>'mycontroller@postform']);
//cookie
Route::get('setcookie','mycontroller@setcookie');
Route::get('getcookie','mycontroller@getcookie');
//upload file

Route::get('uploadfile',function (){
	return view('postfile');
});

Route::post('postfile',['as'=>'postfile','uses'=>'mycontroller@postfile']);

//export file json
Route::get('getjson','mycontroller@getjson');
//view
Route::get('myview','mycontroller@myview');

