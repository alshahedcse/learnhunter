<?php

use App\Http\Controllers\PhoneBookController;
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
//     return view('index');
// });
Route::get('/',[PhoneBookController::class,'index']);
Route::get('create',[PhoneBookController::class,'create'])->name('create');
Route::post('store',[PhoneBookController::class,'store'])->name('store');
Route::get('edit/{phoneB_id}',[PhoneBookController::class,'update'])->name('edit');

Route::post('edit-store',[PhoneBookController::class,'editStore'])->name('editStore');

Route::delete('delete', [PhoneBookController::class, 'destroy'])->name('delete');

