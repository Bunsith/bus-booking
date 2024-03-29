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

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get("/index",[IndexController::class,"index"]);
// // Route::view("/dashboard","index");
// Route::get('index', function() {
//     return View::make('index');
// });
// // Route::get("/login",[LoginController::class,"login"])->name("views.login");
// Route::get('login', function() {
//     return View::make('login');
// });
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Operator Routes
Route::Resource('operator', 'OperatorController');

//  Bus Route
Route::Resource('bus','BusController');

//  Region Route
Route::Resource('region','RegionController');

//  Sub Region Route
Route::Resource('sub-region','Sub_RegionController');