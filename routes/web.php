<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(EmpresaController::class)->group(function () {
    Route::get('empresas/index', 'index')->name('empresas.index');
    Route::get('empresas/create', 'create')->name('empresas.create');
    Route::get('empresas/edit/{id}', 'edit')->name('empresas.edit');
});