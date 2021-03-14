<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
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
    return view('index');
});

//Products routes
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products/{id}/destroy', [ProductsController::class, 'destroy']);
Route::get('/products/{id}/edit', [ProductsController::class, 'edit']);
Route::post('/products/{id}', [ProductsController::class, 'update']);

//Categories routes
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/new', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}/destroy', [CategoriesController::class, 'destroy']);
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::post('/categories/{id}', [CategoriesController::class, 'update']);
