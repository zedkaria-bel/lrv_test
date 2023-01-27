<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


// due to the name wa gave each route, we could, in a view, check / access the route, here's an example :
// request()->routeIs('home')


Route::get('/', [ProdController::class, 'showProds'])->name('home');
Route::get('prods/{prod:slug}', [ProdController::class, 'prodDetails'])->name('prod');

Route::get('register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');


// AJAX
Route::post('/get-communes', [AjaxController::class, 'get_communes'])->name('get-communes');
