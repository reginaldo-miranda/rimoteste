<?php
use App\Http\Controllers\PostComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/*Route::get('/posts', function () {
    return view('posts');
});*/



Route::get('/mostra', function(){
    return view('posts');
});

Route::get('/mostraProd', function(){
     return view('Prod');
});

Route::get('/', function() {
    return view('pdv');
});

Route::get('/menu',function(){
    return view('menu');
});
/*
Route::get('mostra', function(){
    return view('livewire.posts');
});

Route::get('mostra', [PostComponent::class,'render'])->name('mostra');

Route::get('mostra', 'App\Http\Controllers\PostComponent@render')
      ->name('mostra'); */


// pesquisa em livewire https://www.youtube.com/watch?v=qvxSEov0UhY
