<?php

use App\Http\Controllers\cargaliveController;
//
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //
    Route::get('/', 'PagesController@welcome')->name('pages.welcome');
    // Route::get('/welcome', 'PagesController@welcome')->name('pages.welcome');
    Route::get('/dashboard', 'PagesController@dashboard')->name('pages.dashboard');
    //
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/master', 'PagesController@master')->name('pages.master');

    Route::get('/storageLinks', 'PagesController@storageLinks')->name('pages.storageLinks');
    Route::get('/storageRead', 'PagesController@storageRead')->name('pages.storageRead');
    // Route::get('/linkStorage', 'linkStorage')->name('linkStorage');
    // Route::get('/readStorage', 'readStorage')->name('readStorage');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboardWeb.php';
require __DIR__ . '/tasksWeb.php';
