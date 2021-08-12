<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CompanyInsertController;

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
Route::get('insert','App\Http\Controllers\CompanyInsertController@insertform');
Route::post('create','App\Http\Controllers\CompanyInsertController@insert');
Route::get('view-records','App\Http\Controllers\CompanyViewController@index');
Route::get('edit-records','App\Http\Controllers\CompanyUpdateController@index');
Route::get('edit/{id}','App\Http\Controllers\CompanyUpdateController@show');
Route::post('edit/{id}','App\Http\Controllers\CompanyUpdateController@edit');
Route::get('delete-records','App\Http\Controllers\CompanyDeleteController@index');
Route::get('delete/{id}','App\Http\Controllers\CompanyDeleteController@destroy');
