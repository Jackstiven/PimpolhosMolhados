<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);
Route::get('/SobreNos', [\App\Http\Controllers\SobreNosController::class,'sobreNos']);
Route::get('/Produtos', [\App\Http\Controllers\ProdutosController::class,'produtos']);
Route::get('/Contato', [\App\Http\Controllers\ContatosController::class,'contato']);