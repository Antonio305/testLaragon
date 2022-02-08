<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategorieController;

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

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::resource('dashboard/posts', PostController::class);
 // cremaos un controlador para ingrear ala imagenes. 

  // estas rutas esta definido  pala version. 8.0 hacia arriba. 
  // le dfinimos un  nomobre para acceder de una forma facil.
 Route::post('dashboard/posts/{posts}/image', [PostController::class,'image'])->name('posts.image');

// Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');


Route::resource('dashboard/categories', CategorieController::class);
