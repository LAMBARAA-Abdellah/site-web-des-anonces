<?php

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/annonce', function () {
    return view('annonce');
});
Route::get('/demande', function () {
    return view('demande');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/update', function () {
    return view('update');
});




// Auth::routes();

// Compare this snippet from database\migrations\2022_04_13_113700_create_user_table.php:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
