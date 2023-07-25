<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard', [HomeController::class, 'dashboard']);


Route::get('/tiket', [HomeController::class, 'Tiket']);
Route::get('/verifbio', [HomeController::class, 'Verif'])->middleware('auth');  

Route::get('/login', [AuthController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/regis', [AuthController::class, 'Regis'])->middleware('guest');
Route::post('/regis', [AuthController::class, 'create']);

Route::get('/konservasi', [ArtikelController::class, 'konservasi']);
Route::get('/bebek', [ArtikelController::class, 'bebek']);
Route::get('/kano', [ArtikelController::class, 'kano']);

Route::get('/pesan', [HomeController::class, 'Pesan']);

Route::get('/profile', [ArtikelController::class, 'Profile']);

Route::get('/admin', function(){
    return view('admin');
}); 

Route::resource('post', PostController::class)->middleware('auth') ;


// Route::get('/post', function(){
//     return view('post',[
//         'anjay' => Post::all()
//     ]);
// }); 

