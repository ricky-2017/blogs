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
    $url = base64_decode("c2hlbmdxaWFuQHhpYW9tYW4uY24=");
    dd($url);
    return view('welcome');
});

Route::get('demo','DemoController@test',function(){
	
});

Route::get('push','DemoController@push',function(){

});

Route::any('sql','DemoController@sql',function(){

});

Route::get('redisTest','DemoController@redisTest');