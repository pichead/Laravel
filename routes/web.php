<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('jobs', 'GetData@getdataAPI');
Route::get('jobs2', 'GetData@getdataAPI2');
Route::get('jobs4', 'GetData@getdataAPI4');
Route::get('/user/{id}', 'GetData@getdataAPI3');
// Route::get('/user/{id}', function ($id) {
//   return 'user'.$id;
// });
// Route::get('/{id}', 'GetData@getdataAPI3');
