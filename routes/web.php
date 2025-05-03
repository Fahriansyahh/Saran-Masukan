<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showForm'])->name('form.show');
// Menangani pengiriman form dengan metode POST di route yang sama
Route::post('/', [FormController::class, 'submitAll'])->name('submit.all');
