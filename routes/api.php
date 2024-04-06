<?php
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

//Admin

//dashboard
Route::get('/admin', function () {
    return view('layouts.admin.dashboard'); })->name('dashboard');

