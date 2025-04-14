<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\PageController;

Route::get("/", [PageController::class, 'home'])->name('home');
Route::get("/about", [PageController::class, 'about'])->name('about');
Route::post("/seller-store", [PageController::class, 'seller_store'])->name('seller_store');
Route::get("/compare", [PageController::class, 'compare'])->name('compare');
Route::get('/product/{id}', [PageController::class, 'product'])->name('product');
