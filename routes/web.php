<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexServices;

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

Route::get('/', [IndexServices::class, 'index'])->name('welcome');
Route::get('/poslugi-ta-cini', [IndexServices::class, 'services'])->name('services');
Route::get('/poslugi-ta-cini/{category}', [IndexServices::class, 'category_page'])->name('category_page');
Route::get('/dlya-biznesu', [IndexServices::class, 'b2b'])->name('b2b_page');
Route::get('/dlya-biznesu/{page}', [IndexServices::class, 'b2bShow'])->name('b2b_page_show');
Route::get('/viklikati-kuryera', [IndexServices::class, 'courier'])->name('courier_page');
Route::get('/dostavka', [IndexServices::class, 'delivery'])->name('delivery_page');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();