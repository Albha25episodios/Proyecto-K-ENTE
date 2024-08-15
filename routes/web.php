<?php

use App\Http\Controllers\CastellanoController;
use Illuminate\Support\Facades\Route;



Route::get('castellano', [CastellanoController::class, 'index'])->name('castellanoIndex');




Route::get('/', function () {
  return view('welcome');
})->name('welcome');
