<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orders;




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

Route::view('order','Order');
Route::post('order',[orders::class ,'add']);
Route::get('/', function () {
    return view('Home',);
});
Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'varified']);




