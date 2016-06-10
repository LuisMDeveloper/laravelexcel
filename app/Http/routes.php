<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $orderItems = \App\OrderItem::paginate(10);

    return view('welcome', compact('orderItems'));
});

Route::get('download', function () {


	return back();
});
