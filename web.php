<?php

use App\Http\Controllers\ProductController;

// Rotas para operações CRUD de produtos
Route::get('/products', [ProductController::class, 'index']);        
Route::get('/products/{id}', [ProductController::class, 'show']);     
Route::post('/products', [ProductController::class, 'store']);        
Route::put('/products/{id}', [ProductController::class, 'update']);   
Route::delete('/products/{id}', [ProductController::class, 'destroy']); 
