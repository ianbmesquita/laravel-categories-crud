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

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/new', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}/destroy', [CategoriesController::class, 'destroy']);
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::post('/categories/{id}', [CategoriesController::class, 'update']);
