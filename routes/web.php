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

//USER
Route::get('/admin', 'App\Http\Controllers\userController@index')
    ->name('adminerp');
Route::post('/addadmin', 'App\Http\Controllers\userController@addadmin')
->name('addadmin');
Route::post('/editadmin', 'App\Http\Controllers\userController@editadmin')
->name('editadmin');
Route::post('/deladmin', 'App\Http\Controllers\userController@deladmin')
->name('deladmin');


//karyawan
Route::get('/karyawan', 'App\Http\Controllers\karyawanController@index')
    ->name('karyawan');
Route::post('/addkaryawan', 'App\Http\Controllers\karyawanController@addkaryawan')
->name('addkaryawan');
Route::post('/editkaryawan', 'App\Http\Controllers\karyawanController@editkaryawan')
->name('editkaryawan');
Route::post('/delkaryawan', 'App\Http\Controllers\karyawanController@delkaryawan')
->name('delkaryawan');

//Cuti
Route::get('/cuti', 'App\Http\Controllers\cutiController@index')
    ->name('cuti');
Route::post('/addcuti', 'App\Http\Controllers\cutiController@addcuti')
    ->name('addcuti');
Route::post('/editcuti', 'App\Http\Controllers\cutiController@editcuti')
->name('editcuti');
Route::post('/delcuti', 'App\Http\Controllers\cutiController@delcuti')
->name('delcuti');
//auth
Route::get('/', 'App\Http\Controllers\loginController@index')
    ->name('/');
Route::post('/postlogin', 'App\Http\Controllers\loginController@postlogin')
->name('/postlogin');
Route::get('/logout', 'App\Http\Controllers\loginController@postlogout')
->name('logout');

//dashboard
Route::get('/dashboard', 'App\Http\Controllers\dashboardController@index')
    ->name('dashboard');
//apps
Route::get('/perubahan', 'App\Http\Controllers\appController@index_perubahan')
    ->name('perubahan');
Route::get('/tentangapp', 'App\Http\Controllers\appController@index_tentang')
    ->name('tentangapp');

