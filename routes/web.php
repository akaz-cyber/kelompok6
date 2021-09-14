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
Route::get('user/info','Blogcontroller@info');
Route::get('user/about','Blogcontroller@About');
Route::get('user/portfolio','Blogcontroller@portfolio');
Route::get('user/contact','Blogcontroller@contact');
Route::post('user/contact','Blogcontroller@kirimemail');

Route::get('informasi/sejarah','Blogcontroller@sejarah');
Route::get('informasi/pengertian','Blogcontroller@pengertian');
Route::get('informasi/jenis','Blogcontroller@jenis');
Route::get('auth/login','Blogcontroller@login');
Route::get('user/jadwal','Blogcontroller@jadwal');


'Auth'::routes();

Route::get('/home', 'HomeController@index')->name('home');
