<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OfficerController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/admin/books', function () {
        return view('admin.books');
    })->name('admin.books');
    
    Route::get('/admin/officers', function () {
        return view('admin.officers');
    })->name('admin.officers');
    
    Route::get('/admin/users', function () {
        return view('admin.users');
    })->name('admin.users');
    
    Route::get('/admin/inventory', function () {
        return view('admin.inventory');
    })->name('admin.inventory');


    Route::resource('/admin/officers', OfficerController::class);
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/books', BookController::class);
    Route::resource('/admin/inventory', InventoryController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
