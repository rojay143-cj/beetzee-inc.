<?php

use App\Http\Controllers\about;
use App\Http\Controllers\login;
use App\Http\Controllers\banner;
use App\Http\Controllers\member;
use App\Http\Controllers\contact;
use App\Http\Controllers\services;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\milestone;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/register',[login::class, 'registration'])->name('register');
Route::get('/beetzers',[login::class, 'beetzers'])->name('beetzers');
Route::get('/',[login::class, 'loginPage'])->name('login_page');
Route::post('/login',[login::class, 'loginPost'])->name('postLogin');
Route::get('/logout',[login::class, 'logout'])->name('logout');
Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/dashboard',[dashboard::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/member',[dashboard::class, 'member_dashboard'])->name('member_dashboard');
    Route::post('/profile',[login::class, 'profile'])->name('profile');
    Route::post('/pay',[member::class, 'pay'])->name('pay');
    Route::post('/admin_reg', [login::class, 'admin_reg'])->name('admin_reg');
    Route::post('/Insertdiscount', [member::class, 'Insertdiscount'])->name('Insertdiscount');
    Route::post('/Updatediscount', [member::class, 'Updatediscount'])->name('Updatediscount');
    Route::post('/Deletediscount', [member::class, 'Deletediscount'])->name('Deletediscount');

    //Update Subscription
    Route::post('/subscribe', [member::class, 'subscription'])->name('subscribe');

    //WebContents
    Route::post('/WebBanner', [banner::class, 'banner'])->name('banner');
    Route::post('/WebService', [services::class, 'service'])->name('service');
    Route::post('/WebAbout', [about::class, 'aboutus'])->name('about');
    Route::post('/WebMilestone', [milestone::class, 'milestone'])->name('milestone');
    Route::post('/WebContact', [contact::class, 'contact'])->name('contact');
});
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');
