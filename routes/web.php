<?php

use App\Http\Controllers\ProfileController;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['customers' => Customer::all(), 'products' => Product::all(), 'orders' => Order::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/testing', function () {
    return dd(count(Customer::all()->select('id')));
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
