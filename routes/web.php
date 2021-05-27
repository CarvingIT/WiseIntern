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

Route::get('/admin/usermanagement', function () {
    return view('usermanagement');
})->middleware('admin');

Route::get('/admin/projects', function () {
    return view('projectlists');
})->middleware('admin');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/contact', function () {
    return view('contact');
});

Route::view('associate-form','associate-form')->middleware('admin');
	Route::post('formsubmit','App\Http\Controllers\AssociateController@save')->middleware('admin');
	//Route::post('formsubmit','App\Http\Controllers\form@index');

