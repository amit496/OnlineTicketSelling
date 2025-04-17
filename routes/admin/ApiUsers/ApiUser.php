<?php


use App\Http\Controllers\ApiUser\ApiUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->controller(ApiUserController::class)->group(function () {
    Route::get('/api-user', 'index')->name('apiuser.index');
    Route::get('/api-user/create', 'create')->name('apiuser.create');
    Route::post('/api-user/store', 'store')->name('apiuser.store');
    // Route::get('/category/edit/{uuid}', 'edit')->name('category.edit');
    // Route::post('/category/update/{uuid}', 'update')->name('category.update');
    // Route::get('/category/show/{uuid}', 'show')->name('category.show');
    // Route::get('/api/status/{uuid}', 'status')->name('api.status');
    // Route::delete('/category/destroy/{uuid}', 'destroy')->name('category.destroy');
});
