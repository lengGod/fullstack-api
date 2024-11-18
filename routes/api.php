<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{id}/products', [CategoryController::class, 'getProductsByCategory']);

Route::group(['middleware' => ['role']], function () {
    Route::apiResource('products', ProductController::class)->only(['index', 'show', 'destroy']);
    Route::get('/product/cheapest', [ProductController::class, 'cheapest']);
    Route::get('/product/most-expensive', [ProductController::class, 'mostExpensive']);
    Route::put('/product/update-prices', [ProductController::class, 'bulkUpdatePrices']);
    Route::post('/products/{id}/restore', [ProductController::class, 'restore']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
