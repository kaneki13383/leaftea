<?php

use App\Http\Controllers\ChangeAvatar;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/dashboard', function () {
    $user = auth()->user(); 
    return view('dashboard', ['user' => $user]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
