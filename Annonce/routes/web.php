<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosteController;
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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
// Route::get('/annonce', function () {
//     return view('annonce');
// });
// Route::get('/demande', function () {
//     return view('demande');
// });
Route::get('/create', function () {
    return view('create');
});
Route::get('/update', function () {
    return view('update');
});

Route::get('/dashboard', function () {
    return view('annonces');
});

Route::get('/update', function () {
    return view('update');
});
// Route::get('/profil', function () {
//     return view('profil');
// });

// Auth::routes();

// Compare this snippet from database\migrations\2022_04_13_113700_create_user_table.php:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//



Route::post('store', [PosteController::class, 'store'])->middleware("auth");
Route::get('annonces', [PosteController::class, 'annonce'])->middleware("auth");
Route::get('demandes', [PosteController::class, 'demande'])->middleware("auth");
Route::get('profil', [PosteController::class, 'affiche'])->middleware("auth");
Route::get('delete/{id}', [PosteController::class, 'destroy'])->middleware("auth");
Route::get('update/{id}', [PosteController::class, 'show'])->middleware("auth");
Route::post('modifier/{id}', [PosteController::class, 'update'])->middleware("auth");


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [PosteController::class, 'annonce']);
});
