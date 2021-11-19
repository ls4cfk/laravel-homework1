<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/name', function () {
    return 'Aleksi kistauri';
});

Route::get('/age', function () {
    return '21';
});

Route::get('/hobby', function () {
    return 'Reverse Engineering';
});

Route::get('/route-4', function () {
    return 'route-4';
});

Route::get('/route-5', function () {
    return 'route-5';
});

Route::post("/post-example", function(){
    $data = ["შეტყობინება" => "წარმატებით განახლდა"];
    return response()->json($data);
});