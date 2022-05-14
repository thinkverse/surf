<?php

use Illuminate\Support\Facades\Route;
use Wave\Http\Controllers\AnnouncementController;
use Wave\Http\Controllers\Auth\EmailVerificationController;
use Wave\Http\Controllers\Auth\LoginController;
use Wave\Http\Controllers\Auth\RegisterController;
use Wave\Http\Controllers\BlogController;
use Wave\Http\Controllers\DashboardController;
use Wave\Http\Controllers\HomeController;
use Wave\Http\Controllers\NotificationController;
use Wave\Http\Controllers\PageController;
use Wave\Http\Controllers\ProfileController;
use Wave\Http\Controllers\SettingsController;
use Wave\Http\Controllers\SubscriptionController;
use Wave\Http\Controllers\WebhookController;

Route::impersonate();

Route::get('/', [HomeController::class, 'index'])->name('wave.home');
Route::get('@{username}', [ProfileController::class, 'index'])->name('wave.profile');

// Additional Auth Routes
Route::get('logout', [LoginController::class, 'logout'])->name('wave.logout');
Route::post('register/complete', [RegisterController::class, 'complete'])->name('wave.register-complete');

Route::post('user/email/verify', [EmailVerificationController::class, 'send'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('user/email/verify', [EmailVerificationController::class, 'notice'])
    ->middleware('auth')->name('verification.notice');

Route::get('user/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('blog', [BlogController::class, 'index'])->name('wave.blog');
Route::get('blog/{category}', [BlogController::class, 'category'])->name('wave.blog.category');
Route::get('blog/{category}/{post}', [BlogController::class, 'post'])->name('wave.blog.post');

Route::view('install', 'wave::install')->name('wave.install');

/***** Pages *****/
Route::get('p/{page}', [PageController::class, 'page']);

/***** Pricing Page *****/
Route::view('pricing', 'theme::pricing')->name('wave.pricing');

/***** Billing Routes *****/
Route::post('/billing/webhook', [WebhookController::class, 'handleWebhook']);
Route::post('paddle/webhook', [SubscriptionController::class, 'hook']);
Route::post('checkout', [SubscriptionController::class, 'checkout'])->name('checkout');

Route::get('test', [SubscriptionController::class, 'test']);

Route::group(['middleware' => 'wave'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('wave.dashboard');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('settings/{section?}', [SettingsController::class, 'index'])->name('wave.settings');

    Route::post('settings/profile', [SettingsController::class, 'profilePut'])->name('wave.settings.profile.put');
    Route::put('settings/security', [SettingsController::class, 'securityPut'])->name('wave.settings.security.put');

    Route::post('settings/api', [SettingsController::class, 'apiPost'])->name('wave.settings.api.post');
    Route::put('settings/api/{id?}', [SettingsController::class, 'apiPut'])->name('wave.settings.api.put');
    Route::delete('settings/api/{id?}', [SettingsController::class, 'apiDelete'])->name('wave.settings.api.delete');

    Route::get('settings/invoices/{invoice}', [SettingsController::class, 'invoice'])->name('wave.invoice');

    Route::get('announcements', [AnnouncementController::class, 'index'])->name('wave.announcements');
    Route::get('announcement/{id}', [AnnouncementController::class, 'announcement'])->name('wave.announcement');
    Route::post('announcements/read', [AnnouncementController::class, 'read'])->name('wave.announcements.read');

    Route::get('notifications', [NotificationController::class, 'index'])->name('wave.notifications');
    Route::post('notification/read/{id}', [NotificationController::class, 'delete'])->name('wave.notification.read');

    /********** Checkout/Billing Routes ***********/
    Route::post('cancel', [SubscriptionController::class, 'cancel'])->name('wave.cancel');
    Route::view('checkout/welcome', 'theme::welcome');

    Route::post('subscribe', [SubscriptionController::class, 'subscribe'])->name('wave.subscribe');
    Route::view('trial_over', 'theme::trial_over')->name('wave.trial_over');
    Route::view('cancelled', 'theme::cancelled')->name('wave.cancelled');
    Route::post('switch-plans', [SubscriptionController::class, 'switchPlans'])->name('wave.switch-plans');
});

Route::group(['middleware' => 'admin.user'], function () {
    Route::view('admin/do', 'wave::do');
});
