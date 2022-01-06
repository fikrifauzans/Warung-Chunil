<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockOfNameController;
use App\Models\StockOfName;
use Illuminate\Routing\RouteGroup;
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


Route::get('/signin', [LoginController::class, 'show'])->middleware('guest')->name('signin');
Route::post('/signin/registration', [LoginController::class, 'auth']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/',  function () {
    return redirect('/product');
})->middleware('auth');
Route::prefix('product')->middleware('auth')->group(function () {
    Route::get('/' ,    [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class , 'create']);
    Route::post('/create/post', [ProductController::class , 'store' ]);
    Route::get('/update/{product:id}', [ProductController::class, 'show']);
    Route::post('/update/{product:id}/updated', [ProductController::class, 'update']);
    Route::delete('/delete/{product:id}/', [ProductController::class, 'destroy']);
});
Route::prefix('stockofname')->middleware('auth')->group(function () {
    Route::get('/' , [StockOfNameController::class, 'index']);
    Route::get('/create' , [StockOfNameController::class, 'create']);
    Route::post('/post' , [StockOfNameController::class, 'post']);
    Route::get('/post/{stockofname:id}' ,[StockOfNameController::class, 'show']);
    Route::get('/download/{stockofname:id}' , [StockOfNameController::class, 'download']);
    Route::post('/delete/{stockofname:id}' ,[StockOfNameController::class, 'destroy']);
});




