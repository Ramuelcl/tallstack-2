<?php
// routes/dashboardWeb.php
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\dashboard\Users;
// use App\Http\Livewire\dashboard\Roles;
// use App\Http\Livewire\dashboard\Permissions;
// use App\Http\Livewire\dashboard\Tables;

Route::prefix('dashboard')
    ->middleware(['auth', 'verified']) // Añade tu middleware de autenticación y roles
    ->group(function () {
        // dd('sdsdsd');
        Route::get('/users', Users::class)->name('dashboard.users');
        // Route::get('/roles', Roles::class)->name('dashboard.roles');
        // Route::get('/permissions', Permissions::class)->name('dashboard.permissions');
        // Route::get('/tables', Tables::class)->name('dashboard.tables');
    });
