<?php

use App\Http\Controllers\PresidentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('presidents', [PresidentController::class, 'index'])->name('president.index');
Route::get('presidents/create', [PresidentController::class, 'create'])->name('president.create');
Route::post('presidents/store', [PresidentController::class, 'store'])->name('president.store');
Route::get('president/{president}', [PresidentController::class, 'show'])->name('president.show');
Route::delete('president/{president}',[PresidentController::class,'destroy'])->name('president.destroy');
Route::put('president/{president}',[PresidentController::class,'update'])->name('president.update');
Route::get('president/{president}/editar',[PresidentController::class,'edit'])->name('president.edit');