<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('products');
// });

Route::resource('products',ProductController::class);

Route::get('/',[ProductController::class,'index']);

Auth::routes();

// Route::get('/create',[ProductController::class,'create']);

// Route::post('/products',[ProductController::class,'store']);

// Route::get('/edit/{id}',[ProductController::class,'edit']);

// Route::put('/update/{id}',[ProductController::class,'update']);

// Route::get('/delete/{id}',[ProductController::class,'destroy']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/logout',[UserController::class,'logout']);






// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/products',[ProductController::class, 'index']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/logout',[UserController::class,'logout']);
// Route::get('/products',[ProductController::class,'index']);

