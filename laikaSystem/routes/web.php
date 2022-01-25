<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CargoController;

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
    return view('auth.login');
});


Route::get('/cargo/cargoslist', function () {
    return view('cargo.cargoslist');
});
Route::middleware(['api:apilaika', 'verified'])->group(function () {
    return view('empleado.index');
});


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

});
Route::resource('cargo',CargoController::class);
Route::resource('empleado',EmpleadoController::class)->middleware("auth");
Auth::routes(['reset'=>false]);

