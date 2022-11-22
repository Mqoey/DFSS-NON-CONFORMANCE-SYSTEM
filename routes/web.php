<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InspectorAdminController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuperAdminController;
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

    Route::get('/role', [RoleController::class, 'index'])->name('role.index');

    Route::get('/user', [SuperAdminController::class, 'viewusers'])->name('user.index');
    Route::get('/create/user', [SuperAdminController::class, 'createuser'])->name('user.create');
    Route::post('/create/user', [SuperAdminController::class, 'storeuser'])->name('user.store');
    Route::post('/edit/user/{user}', [SuperAdminController::class, 'edituser'])->name('user.edit');
    Route::post('/update/user/{user}', [SuperAdminController::class, 'updateuser'])->name('user.update');
    Route::post('/delete/user/{user}', [SuperAdminController::class, 'destroyuser'])->name('user.destroy');

    Route::get('/airport', [AirportController::class, 'index'])->name('airport.index');
    Route::get('/create/airport', [AirportController::class, 'create'])->name('airport.create');
    Route::post('/create/airport', [AirportController::class, 'store'])->name('airport.store');
    Route::post('/edit/airport/{airport}', [AirportController::class, 'edit'])->name('airport.edit');
    Route::post('/update/airport/{airport}', [AirportController::class, 'update'])->name('airport.update');
    Route::post('/delete/airport/{airport}', [AirportController::class, 'destroy'])->name('airport.destroy');

    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/create/customer', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/create/customer', [CustomerController::class, 'store'])->name('customer.store');
    Route::post('/edit/customer/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/update/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::post('/delete/customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');

    Route::get('/inspector', [InspectorController::class, 'index'])->name('inspector.index');
    Route::get('/create/inspector', [InspectorController::class, 'create'])->name('inspector.create');
    Route::post('/create/inspector', [InspectorController::class, 'store'])->name('inspector.store');
    Route::post('/edit/inspector/{inspector}', [InspectorController::class, 'edit'])->name('inspector.edit');
    Route::post('/update/inspector/{inspector}', [InspectorController::class, 'update'])->name('inspector.update');
    Route::post('/delete/inspector/{inspector}', [InspectorController::class, 'destroy'])->name('inspector.destroy');

    Route::get('/inspectoradmin', [InspectorAdminController::class, 'index'])->name('inspectoradmin.index');
    Route::get('/create/inspectoradmin', [InspectorAdminController::class, 'create'])->name('inspectoradmin.create');
    Route::post('/create/inspectoradmin', [InspectorAdminController::class, 'store'])->name('inspectoradmin.store');
    Route::post('/edit/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'edit'])->name('inspectoradmin.edit');
    Route::post('/update/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'update'])->name('inspectoradmin.update');
    Route::post('/delete/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'destroy'])->name('inspectoradmin.destroy');
});

require __DIR__ . '/auth.php';
