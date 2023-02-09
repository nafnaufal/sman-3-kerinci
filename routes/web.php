<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [Pages::class, 'index']);
Route::get('/profil', [Pages::class, 'profil']);
Route::get('/foto', [Pages::class, 'foto']);
Route::get('/video', [Pages::class, 'video']);
Route::get('/agenda', [Pages::class, 'agenda']);
Route::get('/guru', [Pages::class, 'guru']);
Route::get('/pengumuman', [Pages::class, 'pengumuman']);