<?php

use App\Http\Controllers\cargaliveController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/dashboard', 'PagesController@index')->name('pages.index');
    //
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/welcome', 'PagesController@welcome')->name('pages.welcome');
    Route::get('/master', 'PagesController@master')->name('pages.master');

    Route::get('/storageLinks', 'PagesController@storageLinks')->name('pages.storageLinks');
    Route::get('/storageRead', 'PagesController@storageRead')->name('pages.storageRead');
    // Route::get('/linkStorage', 'linkStorage')->name('linkStorage');
    // Route::get('/readStorage', 'readStorage')->name('readStorage');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/users', [cargaliveController::class, 'usersIndex'])->name('users.usersIndex');
    Route::get('/roles', [UserController::class, 'rolesIndex'])->name('users.rolesIndex');
    Route::get('/permissions', [UserController::class, 'permissionsIndex'])->name('users.permissionsIndex');
});
