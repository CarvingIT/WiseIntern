<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\UserController;

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

Route::get('/admin/usermanagement',[UserController::class,'index'])->middleware('admin');


/*Route::get('/admin/projects', function () {
    return view('projectlists');
})->middleware('admin');*/

/*Route::get('/admin/projects/new', function () {
    return view('projectform');
})->middleware('admin');*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/contact', function () {
    return view('contact');
});



//Route::view('admin/associate-form/new','associate-form')->middleware('admin');
	Route::post('/admin/save-associate','App\Http\Controllers\AssociateController@save')->middleware('admin');
	Route::get('/admin/associatelist','App\Http\Controllers\AssociateController@index')->middleware('admin');
//Route::get('/admin/delete/{id}','App\Http\Controllers\AssociateController@delete')->middleware('admin');
Route::post('/admin/associate/delete','App\Http\Controllers\AssociateController@delete')->middleware('admin');
Route::get('/admin/associate-form/{id}','App\Http\Controllers\AssociateController@edit')->middleware('admin');
//Route::view('admin/associate-view/','associate-view')->middleware('admin');
Route::get('/admin/associate-view/{id}','App\Http\Controllers\AssociateController@show')->middleware('admin');

Route::post('/admin/save-project','App\Http\Controllers\ProjectController@save')->middleware('admin');
Route::get('/admin/projectlists','App\Http\Controllers\ProjectController@index')->middleware('admin');
Route::get('/admin/project-view/{id}','App\Http\Controllers\ProjectController@show')->middleware('admin');
Route::get('/admin/projectform/{id}','App\Http\Controllers\ProjectController@edit')->middleware('admin');
Route::post('/admin/project/delete','App\Http\Controllers\ProjectController@delete')->middleware('admin');
