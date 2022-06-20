<?php

use Illuminate\Routing\Router;
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

Route::name('wave.')
    ->group(function (Router $router) {
        $router->get('/', [HomeController::class, 'index'])->name('home');
        $router->get('/@{username}', [ProfileController::class, 'index'])->name('profile');

        $router->controller(BlogController::class)
            ->prefix('/blog')
            ->name('blog.')
            ->group(function (Router $router) {
                $router->get('/', [BlogController::class, 'index'])->name('index');
                $router->get('/{category}', [BlogController::class, 'category'])->name('category');
                $router->get('/{category}/{post}', [BlogController::class, 'post'])->name('post');
            });

        $router->view('install', 'wave::install')->name('install');
        $router->view('pricing', 'theme::pricing')->name('pricing');
    });

/***** Pages *****/
Route::get('p/{page}', [PageController::class, 'page']);

/***** Billing Routes *****/
Route::post('billing/webhook', [WebhookController::class, 'handleWebhook'])->middleware('verify_webhook');
Route::post('checkout', [SubscriptionController::class, 'checkout'])->name('checkout');

Route::view('/admin/do', 'wave::do')->middleware('admin.user');

Route::middleware('auth')
    ->name('wave.')
    ->group(function (Router $router) {
        $router->get('/dashboard', [DashboardController::class, 'index'])
            ->middleware('wave')
            ->name('dashboard');

        $router->get('logout', [LoginController::class, 'logout'])->name('logout');
        $router->post('register/complete', [RegisterController::class, 'complete'])->name('register-complete');

        $router->controller(EmailVerificationController::class)
            ->prefix('user/email/verify')
            ->name('verification.')
            ->group(function (Router $router) {
                $router->get('/', 'notice')->name('notice');
                $router->post('/', 'send')->middleware('throttle:6,1')->name('send');
                $router->get('/{id}/{hash}', 'verify')->middleware('signed')->name('verify');
            });

        $router->controller(SettingsController::class)
            ->prefix('settings')
            ->name('settings.')
            ->group(function (Router $router) {
                $router->get('/{section?}', 'index')->name('show');

                $router->post('/profile', 'profilePut')->name('profile.put');
                $router->put('/security', 'securityPut')->name('security.put');

                $router->post('/api', 'apiPost')->name('api.post');
                $router->put('/api/{id?}', 'apiPut')->name('api.put');
                $router->delete('/api/{id?}', 'apiDelete')->name('api.delete');

                $router->get('/invoices/{invoice}', 'invoice')->name('invoice');
            });

        $router->controller(AnnouncementController::class)
            ->prefix('announcements')
            ->name('announcements.')
            ->group(function (Router $router) {
                $router->get('/', 'index')->name('index');
                $router->get('/{id}', 'show')->name('show');
                $router->post('/read', 'read')->name('read');
            });

        $router->controller(NotificationController::class)
            ->prefix('notifications')
            ->name('notifications.')
            ->group(function (Router $router) {
                $router->get('/', 'index')->name('index');
                $router->post('/read/{id}', 'delete')->name('read');
            });

        /********** Checkout/Billing Routes ***********/
        $router->controller(SubscriptionController::class)
            ->group(function (Router $router) {
                $router->post('cancel', 'cancel')->name('cancel');
                $router->post('subscribe', 'subscribe')->name('subscribe');
                $router->post('switch-plans', 'switchPlans')->name('switch-plans');
            });

        $router->view('checkout/welcome', 'theme::welcome');
        $router->view('trial_over', 'theme::trial_over')->name('trial_over');
        $router->view('cancelled', 'theme::cancelled')->name('cancelled');
    });
