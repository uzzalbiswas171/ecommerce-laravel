<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/UserScreen', function () {
    $user_ob=User::all();
    return view('employee',compact('user_ob'));
});



Route::post('Search', [\App\Http\Controllers\UserController::class, 'Sarch'])->name('Search') ;
Route::post('CreateUser', [\App\Http\Controllers\UserController::class, 'createUser'])->name('createUser') ;
   
 


