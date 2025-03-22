<?php

use App\Http\Controllers\Admin\Web\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->controller(CategoryController::class)->group(function () {
    Route::get('/index', 'index')->name('category.index');
    Route::get('/create', 'create')->name('category.create');
    Route::post('/store', 'store')->name('category.store');
    Route::get('/edit/{uuid}', 'edit')->name('category.edit');
    Route::post('/update/{uuid}', 'update')->name('category.update');
});
