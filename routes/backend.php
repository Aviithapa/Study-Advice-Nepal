<?php

use App\Http\Controllers\Portal\BannerController;
use App\Http\Controllers\Portal\BlogController;
use App\Http\Controllers\Portal\DashboardController;
use App\Http\Controllers\Portal\DestinationsController;
use App\Http\Controllers\Portal\FeaturesController;
use App\Http\Controllers\Portal\PageController;
use App\Http\Controllers\Portal\PartnerController;
use App\Http\Controllers\Portal\PostController;
use App\Http\Controllers\Portal\ServicesController;
use App\Http\Controllers\Portal\SiteSettingController;
use App\Http\Controllers\Portal\TeamsController;
use App\Http\Controllers\Portal\TestimonialsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('banner', BannerController::class)->only('index', 'store');
        Route::resource('setting', SiteSettingController::class)->only('index', 'store');
        Route::resource('posts', PostController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('destinations', DestinationsController::class);
        Route::resource('testimonials', TestimonialsController::class);
        Route::resource('features', FeaturesController::class);
        Route::resource('teams', TeamsController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('pages', PageController::class);
    });
