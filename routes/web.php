<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin-user-profile', 'profile')->name('admin.profile');
    Route::get('/admin-user-edit','edit_profile')->name('admin.edit_profile');
    Route::post('/store/profile','store_profile')->name('admin.store.profile');
    Route::get('/admin-change-password-form','ChangePassword')->name('admin.change_password.form');
    Route::post('/update-password','UpdatePassword')->name('update.password');

})->middleware(['auth', 'verified'])->name('admin.index');

Route::controller(HomeController::class)->group(function () {
    Route::get('/Home-slider', 'HomeSlide')->name('HomeSliders');
    Route::post('/update/slider','UpdateSlider')->name('update.slider');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/update-about-details', 'update_about')->name('admin.about_update');
    Route::post('/store/about_details','UpdateAbout')->name('update.about');
});


Route::controller(FrontController::class)->prefix('home')->group( function(){
    /////about section
    Route::get('/', 'HomeMain')->name('home');
    Route::get('/about_me','about_me')->name('home.about_me');
    Route::get('/services','services')->name('home.services');
    Route::get('/protfolio','protfolio')->name('home.protfolio');
    Route::get('/blog','blog')->name('home.blog');
    Route::get('/contact_us','contact_us')->name('home.contact_us');
    

});

require __DIR__.'/auth.php';

