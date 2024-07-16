<?php

use App\Http\Controllers\CastellanoController;
use Illuminate\Support\Facades\Route;


Route::view('la_ruta_1', 'vista1')->name('ruta1');
Route::view('la_ruta_2', 'vista2')->name('ruta2');




Route::get('castellano', [CastellanoController::class, 'index'])->name('castellanoIndex');




Route::get('/', function () {
  return view('welcome');
});
