<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InspectorAdminController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\NonConformativeFormController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return redirect(route('customer.dashboard'));
});
Route::get('activate', function () {
    return view('auth.activate');
})->name('activate');
Route::middleware(['auth', 'customer', 'activated'])->group(function () {
    Route::get('customerdashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('customernonconformativeform', [CustomerController::class, 'nonconformativeforms'])->name('customernonconformativeform.index');
});
Route::middleware(['auth', 'inspector', 'activated'])->group(function () {
    Route::get('inspectordashboard', [InspectorController::class, 'dashboard'])->name('inspector.dashboard');

    Route::get('inspectornonconformativeform', [InspectorController::class, 'nonconformativeforms'])->name('inspectornonconformativeform.index');
    Route::get('create/inspectornonconformativeform', [NonConformativeFormController::class, 'create'])->name('inspectornonconformativeform.create');
    Route::post('create/inspectornonconformativeform', [NonConformativeFormController::class, 'store'])->name('inspectornonconformativeform.store');
});
Route::middleware(['auth', 'inspectoradmin', 'activated'])->group(function () {
    Route::get('inspectoradmindashboard', [InspectorAdminController::class, 'dashboard'])->name('inspectoradmin.dashboard');

    Route::get('inspectoradminnonconformativeform', [InspectorAdminController::class, 'adminnonconformativeforms'])->name('inspectoradminnonconformativeform.index');
    Route::get('close/{id}', [InspectorAdminController::class, 'close'])->name('close');
    Route::get('open/{id}', [InspectorAdminController::class, 'open'])->name('open');
    Route::get('onhold/{id}', [InspectorAdminController::class, 'onhold'])->name('onhold');
});
Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('superadmindashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');

    Route::get('role', [RoleController::class, 'index'])->name('role.index');

    Route::get('user', [SuperAdminController::class, 'viewusers'])->name('user.index');
    Route::get('activate/{id}', [SuperAdminController::class, 'activate'])->name('user.activate');
    Route::get('deactivate/{id}', [SuperAdminController::class, 'deactivate'])->name('user.deactivate');

    Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('create/customer', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('create/customer', [CustomerController::class, 'store'])->name('customer.store');
    Route::post('edit/customer/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('update/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::post('delete/customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');

    Route::get('inspector', [InspectorController::class, 'index'])->name('inspector.index');
    Route::get('create/inspector', [InspectorController::class, 'create'])->name('inspector.create');
    Route::post('create/inspector', [InspectorController::class, 'store'])->name('inspector.store');
    Route::post('edit/inspector/{inspector}', [InspectorController::class, 'edit'])->name('inspector.edit');
    Route::post('update/inspector/{inspector}', [InspectorController::class, 'update'])->name('inspector.update');
    Route::post('delete/inspector/{inspector}', [InspectorController::class, 'destroy'])->name('inspector.destroy');

    Route::get('inspectoradmin', [InspectorAdminController::class, 'index'])->name('inspectoradmin.index');
    Route::get('create/inspectoradmin', [InspectorAdminController::class, 'create'])->name('inspectoradmin.create');
    Route::post('create/inspectoradmin', [InspectorAdminController::class, 'store'])->name('inspectoradmin.store');
    Route::post('edit/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'edit'])->name('inspectoradmin.edit');
    Route::post('update/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'update'])->name('inspectoradmin.update');
    Route::post('delete/inspectoradmin/{inspectoradmin}', [InspectorAdminController::class, 'destroy'])->name('inspectoradmin.destroy');

    Route::get('nonconformativeform', [SuperAdminController::class, 'nonconformativeform'])->name('nonconformativeform.index');
});

require __DIR__.'/auth.php';
