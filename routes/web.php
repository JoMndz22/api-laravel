<?php

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


Route::get('/', 'PageController@getHome');


Route::get('/crea-tu-pizza', function () {
    return view('creapizza');
})->middleware('auth');
Route::get('/sucursales', function () {
    return view('sucursales');
});
Route::get('/admin', function () {
    return view('admin.loginAdmin');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

//INGREDIENTES
Route::resource('ingredientes', 'IngredientesController');


//PIZZAS
Route::resource('pizzas', 'PizzasController');




//----------------------------------

Route::post('/send-register','UserController@register');
Auth::routes();

