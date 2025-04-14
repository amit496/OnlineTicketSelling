<?php

use App\Http\Controllers\Admin\Web\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category/store', 'store')->name('category.store');
    Route::get('/category/edit/{uuid}', 'edit')->name('category.edit');
    Route::post('/category/update/{uuid}', 'update')->name('category.update');
    Route::get('/category/show/{uuid}', 'show')->name('category.show');
    Route::get('/category/status/{uuid}', 'status')->name('category.status');
    Route::delete('/category/destroy/{uuid}', 'destroy')->name('category.destroy');
});
