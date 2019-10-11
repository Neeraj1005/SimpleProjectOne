<?php


Route::get('/', function () {
	return view('login');
});
Route::get('create','Users@create');
Route::post('loginsubmit','Users@loginsubmit');
Route::post('createsubmit','Users@createsubmit');


Route::group(['middleware'=>['logCheck']], function(){

	Route::get('list','Users@list');
});