<?php
//Public
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

//Admin
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\AdminTabelHomeController;
use App\Http\Controllers\AdminTabelLinkFooterController;
use App\Http\Controllers\AdminTabelProfileController;
use App\Http\Controllers\AdminTabelContactUsController;
use App\Http\Controllers\AdminTabelUserController;


use Illuminate\Support\Facades\Route;

//Public

//home
Route::get('/', function () {
    return view('layouts.public.home'); })->name('home');

// Login with Controller
Route::get('/login', [LoginController::class, 'index'])->name('login');

// profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Contact with Controller
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');


//Admin

//dashboard
Route::get('/admin', function () {
    return view('layouts.admin.dashboard'); })->name('dashboard');

//tabel home
Route::get('/admin/home', function () {
    return view('layouts.admin.tabelhome'); })->name('tabelhome');

//Tabel profile experience
Route::get('/admin/profile/', function () {
    return view('layouts.admin.tabelprofileexperience'); })->name('tabelprofileexperience');

//Tabel profile education
Route::get('/admin/profile/tabel-profile-education', function () {
    return view('layouts.admin.tabelprofileeducation'); })->name('tabelprofileeducation');

//Tabel profile skill
Route::get('/admin/profile/tabel-profile-skill', function () {
    return view('layouts.admin.tabelprofileskill'); })->name('tabelprofileskill');

//Tabel profile tools
Route::get('/admin/profile/tabel-profile-tools', function () {
    return view('layouts.admin.tabelprofiletools'); })->name('tabelprofiletools');

//Tabel Contact us
Route::get('/admin/contact-us', function () {
    return view('layouts.admin.tabelcontact-us'); })->name('tabelcontact-us');

//Tabel User
Route::get('/admin/user', function () {
    return view('layouts.admin.tabeluser'); })->name('tabeluser');

//Tabel User
Route::get('/admin/linkfooter', function () {
    return view('layouts.admin.tabelinkfooter'); })->name('tabelinkfooter');