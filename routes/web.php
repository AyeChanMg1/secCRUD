<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\GadgetController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/phone', [PhoneController::class, 'index'])->name('phone.index');
Route::get('/phone/create', [PhoneController::class, 'create'])->name('phone.create');
Route::post('/phone', [PhoneController::class, 'store'])->name('phone.store');
Route::get('/phone/show/{id}', [PhoneController::class, 'show'])->name('phone.show');
Route::get('/phone/edit/{id}', [PhoneController::class, 'edit'])->name('phone.edit');
Route::put('/phone/update/{id}', [PhoneController::class, 'update'])->name('phone.update');
Route::delete('/phone/destroy/{id}', [PhoneController::class, 'destroy'])->name('phone.destroy');

Route::get('/laptop', [LaptopController::class, 'index'])->name('laptop.index');
Route::get('/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
Route::post('/laptop', [LaptopController::class, 'store'])->name('laptop.store');
Route::get('/laptop/show/{id}', [LaptopController::class, 'show'])->name('laptop.show');
Route::get('/laptop/edit/{id}', [LaptopController::class, 'edit'])->name('laptop.edit');
Route::put('/laptop/update/{id}', [LaptopController::class, 'update'])->name('laptop.update');
Route::delete('/laptop/destroy/{id}', [LaptopController::class, 'destroy'])->name('laptop.destroy');

Route::get('/gadget', [GadgetController::class, 'index'])->name('gadget.index');
Route::get('/gadget/create', [GadgetController::class, 'create'])->name('gadget.create');
Route::post('/gadget', [GadgetController::class, 'store'])->name('gadget.store');
Route::get('/gadget/show/{id}', [GadgetController::class, 'show'])->name('gadget.show');
Route::get('/gadget/edit/{id}', [GadgetController::class, 'edit'])->name('gadget.edit');
Route::put('/gadget/update/{id}', [GadgetController::class, 'update'])->name('gadget.update');
Route::delete('/gadget/destroy/{id}', [GadgetController::class, 'destroy'])->name('gadget.destroy');