<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//login

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

//home client
Route::group(['middleware' => ['auth']], function(){
Route::get('/homeclient', function () {
    return view('homeclient'); 
}) -> middleware('auth');

Route::get('/mealplanningg', function () {
    return view('mealplanningg');
});

Route::get('/nutritionists', function () {
    return view('nutritionists');
});

Route::get('/profil', function () {
    return view('profil');
});
//penutup client
});

Route::get('/coba', function () {
    return view('coba');
});

//homeadmin
Route::get('/homeadmin', function () {
    return view('homeadmin');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/search', 'SearchController@search')->name('search');




