<?php

use App\Http\Controllers\Admin\Web\CategoryController;
use App\Http\Controllers\Admin\Web\SettingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->controller(SettingController::class)->group(function () {
    Route::get('/index', 'index')->name('setting.index');
});



