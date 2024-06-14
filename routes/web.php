<?php
//Public
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

//Admin
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\AdminTabelHomeController;
use App\Http\Controllers\AdminFooterController;
use App\Http\Controllers\AdminTabelProfileController;
use App\Http\Controllers\AdminProfileEducationController;
use App\Http\Controllers\AdminProfileSkillController;
use App\Http\Controllers\AdminProfileToolsController;
use App\Http\Controllers\AdminTabelUserController;
use App\Http\Controllers\AdminContactUsController;
use App\Http\Controllers\PublicHomeController;

use App\Models\Profile;
use App\Models\Profile_Education;
use App\Models\Profile_Skill;
use App\Models\Profile_Tools;
use App\Models\ContactUs;
use App\Models\Footer;
use App\Models\Home;
use App\Models\User;


// use App\Http\Controllers\AdminTabelUserController;


use Illuminate\Support\Facades\Route;

//Public

//home

Route::get('/', [PublicHomeController::class, 'index'])->name('home','footer');
// Route::get('/', [PublicHomeController::class, 'index'])->name('footer');


// Login with Controller
Route::get('/login', [LoginController::class, 'index'])->name('login');

// profile
// Route::get('/profile', [ProfileController::class, ])->name('profile');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles');


// Contact with Controller
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');


//Admin

//dashboard
// Route::get('/admin', function () {
//     return view('layouts.admin.dashboard'); })->name('dashboard');
Route::get('/admin', [DashboardAdminController::class, 'index'])->name('dashboard');


//tabel home
// Route::get('/admin/home', function () {
//     return view('layouts.admin.tabelhome'); })->name('tabelhome');
Route::get('/admin/home', [AdminTabelHomeController::class, 'index'])->name('home.index');
Route::post('/admin/home', [AdminTabelHomeController::class, 'store'])->name('home.store');
Route::get('/admin/home', [AdminTabelHomeController::class, 'create'])->name('home.create');
Route::get('/admin/home/{id}/edit', [AdminTabelHomeController::class, 'edit'])->name('home.edit');
Route::put('/admin/home/{id}/update', [AdminTabelHomeController::class, 'update'])->name('home.update');
Route::get('/admin/home/{id}/distroy', [AdminTabelHomeController::class, 'distroy'])->name('home.distroy');


//Tabel profile experience
    Route::get('/admin/profile', [AdminTabelProfileController::class, 'index'])->name('profile.index');
    Route::post('/admin/profile', [AdminTabelProfileController::class, 'store'])->name('profile.store');
    Route::get('/admin/profile', [AdminTabelProfileController::class, 'create'])->name('profile.create');
    Route::get('/admin/profile/{id}/edit', [AdminTabelProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/admin/profile/{id}/update', [AdminTabelProfileController::class, 'update'])->name('profile.update');
    Route::get('/admin/profile/{id}/distroy', [AdminTabelProfileController::class, 'distroy'])->name('profile.distroy');


//Tabel profile education
    Route::get('/admin/profile/education', [AdminProfileEducationController::class, 'index'])->name('education.index');
    Route::post('/admin/profile/education', [AdminProfileEducationController::class, 'store'])->name('education.store');
    Route::get('/admin/profile/education', [AdminProfileEducationController::class, 'create'])->name('education.create');
    Route::get('/admin/profile/education/{id}/edit', [AdminProfileEducationController::class, 'edit'])->name('education.edit');
    Route::put('/admin/profile/education/{id}/update', [AdminProfileEducationController::class, 'update'])->name('education.update');
    Route::get('/admin/profile/education/{id}/distroy', [AdminProfileEducationController::class, 'distroy'])->name('education.distroy');


//Tabel profile skill
Route::get('/admin/profile/skill', [AdminProfileSkillController::class, 'index'])->name('skill.index');
Route::post('/admin/profile/skill', [AdminProfileSkillController::class, 'store'])->name('skill.store');
Route::get('/admin/profile/skill', [AdminProfileSkillController::class, 'create'])->name('skill.create');
Route::get('/admin/profile/skill/{id}/edit', [AdminProfileSkillController::class, 'edit'])->name('skill.edit');
Route::put('/admin/profile/skill/{id}/update', [AdminProfileSkillController::class, 'update'])->name('skill.update');
Route::get('/admin/profile/skill/{id}/distroy', [AdminProfileSkillController::class, 'distroy'])->name('skill.distroy');
   
//Tabel profile tools
Route::get('/admin/profile/tools', [AdminProfileToolsController::class, 'index'])->name('tools.index');
Route::post('/admin/profile/tools', [AdminProfileToolsController::class, 'store'])->name('tools.store');
Route::get('/admin/profile/tools', [AdminProfileToolsController::class, 'create'])->name('tools.create');
Route::get('/admin/profile/tools/{id}/edit', [AdminProfileToolsController::class, 'edit'])->name('tools.edit');
Route::put('/admin/profile/tools/{id}/update', [AdminProfileToolsController::class, 'update'])->name('tools.update');
Route::get('/admin/profile/tools/{id}/distroy', [AdminProfileToolsController::class, 'distroy'])->name('tools.distroy');


//Tabel User
Route::get('/admin/user', [AdminTabelUserController::class, 'index'])->name('user.index');
Route::post('/admin/user', [AdminTabelUserController::class, 'store'])->name('user.store');
Route::get('/admin/user', [AdminTabelUserController::class, 'create'])->name('user.create');
Route::get('/admin/user/{id}/edit', [AdminTabelUserController::class, 'edit'])->name('user.edit');
Route::put('/admin/user/{id}/update', [AdminTabelUserController::class, 'update'])->name('user.update');
Route::get('/admin/user/{id}/distroy', [AdminTabelUserController::class, 'distroy'])->name('user.distroy');

//Tabel Footer
Route::get('/admin/footer', [AdminFooterController::class, 'index'])->name('footer.index');
Route::post('/admin/footer', [AdminFooterController::class, 'store'])->name('footer.store');
Route::get('/admin/footer', [AdminFooterController::class, 'create'])->name('footer.create');
Route::get('/admin/footer/{id}/edit', [AdminFooterController::class, 'edit'])->name('footer.edit');
Route::put('/admin/footer/{id}/update', [AdminFooterController::class, 'update'])->name('footer.update');
Route::get('/admin/footer/{id}/distroy', [AdminFooterController::class, 'distroy'])->name('footer.distroy');

//Tabel ContactUs
Route::get('/admin/contactus', [AdminContactUsController::class, 'index'])->name('contactus.index');
Route::post('/admin/contactus', [AdminContactUsController::class, 'store'])->name('contactus.store');
Route::get('/admin/contactus', [AdminContactUsController::class, 'create'])->name('contactus.create');
Route::get('/admin/contactus/{id}/distroy', [AdminContactUsController::class, 'distroy'])->name('contactus.distroy');

Route::get('/admin/notfound', function () {
    return view('layouts.admin.notfound'); })->name('notfound');