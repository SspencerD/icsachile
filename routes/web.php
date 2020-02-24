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


Route::get('/', 'WelcomeController@welcome');

Route::post('/contacto','WelcomeController@enviar')->name('enviar');


Route::get('/somos', 'WelcomeController@somos');
Route::get('/postventa', 'WelcomeController@postventa');
Route::get('/contacto', 'WelcomeController@contacto');


Auth::routes();


Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {

    Route::get('/dashboard', 'DashboardController@index');

    /* Productos */
    Route::get('/products', 'ProductController@index'); //listar productos
    Route::get('/products/create', 'ProductController@create'); //crea productos
    Route::post('/products', 'ProductController@store'); //guardar datos del usuario.
    Route::get('/products/{id}/edit', 'ProductController@edit');
    Route::post('/products/{id}/edit', 'ProductController@update');
    Route::delete('/products/{id}', 'ProductController@destroy');

    /* Imagen de productos */
    Route::get('/products/{id}/images', 'ImageController@index');
    Route::post('/products/{id}/images', 'ImageController@store');
    Route::delete('/products/{id}/images/', 'ImageController@destroy');
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select');

    /* Categorias */
    Route::get('/categories', 'CategoryController@index'); //Listar categorias
    Route::post('/categories', 'CategoryController@store'); //crear categoria
    Route::get('/categories/{category}/edit', 'CategoryController@edit');
    Route::post('/categories/{category}/edit', 'CategoryController@update');
    Route::delete('/categories/{category}', 'CategoryController@destroy');

    /* Marcas */
    Route::get('/brands', 'BrandController@index'); //Listar categorias
    Route::get('/brands/create', 'BrandController@create');
    Route::post('/brands', 'BrandController@store'); //crear categoria
    Route::get('/brands/{brand}/edit', 'BrandController@edit');
    Route::post('/brands/{brand}/edit', 'BrandController@update');
    Route::delete('/brands/{brand}', 'BrandController@destroy');
});

/* todo lo demas */
