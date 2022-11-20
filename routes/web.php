<?php

use App\Http\Controllers\InspectorAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('customer.dashboard'));
});

Route::middleware('auth', 'customer')->group(function () {
    Route::get('/customerdashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});

Route::middleware('auth', 'inspector')->group(function () {
    Route::get('/inspectordashboard', function () {
        return view('inspector.dashboard');
    })->name('inspector.dashboard');
});

Route::middleware('auth', 'inspectoradmin')->group(function () {
    Route::get('/inspectoradmindashboard', function () {
        return view('inspectoradmin.dashboard');
    })->name('inspectoradmin.dashboard');
});

Route::middleware('auth', 'superadmin')->group(function () {
    Route::get('/superadmindashboard', function () {
        return view('superadmin.dashboard');
    })->name('superadmin.dashboard');

    Route::get('/user', [InspectorAdminController::class, 'viewusers'])->name('user.index');
    Route::get('/create/user', [InspectorAdminController::class, 'createuser'])->name('user.create');
    Route::post('/create/user', [InspectorAdminController::class, 'storeuser'])->name('user.store');
    Route::post('/edit/user/{user}', [InspectorAdminController::class, 'edituser'])->name('user.edit');
    Route::post('/update/user/{user}', [InspectorAdminController::class, 'updateuser'])->name('user.update');
    Route::post('/delete/user/{user}', [InspectorAdminController::class, 'destroyuser'])->name('user.destroy');
});

require __DIR__ . '/auth.php';
