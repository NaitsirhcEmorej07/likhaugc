<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatorProfileController;
use App\Http\Controllers\ExtractClientDataController;
use App\Http\Controllers\CampaignFreePortfolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/lets-start-step-1', 'lets-start-step-1')
    ->name('lets-start-step-1');

Route::view('/lets-start-step-2', 'lets-start-step-2')
    ->name('lets-start-step-2');

Route::view('/lets-start-step-3', 'lets-start-step-3')
    ->name('lets-start-step-3');

Route::view('/lets-start-step-4', 'lets-start-step-4')
    ->name('lets-start-step-4');



Route::post('/creator-info/store', [CreatorProfileController::class, 'storeStep1'])
    ->name('creator-info.store');

Route::post('/creator-theme/store', [CreatorProfileController::class, 'storeStep2'])
    ->name('creator-theme.store');

Route::post('/creator-portfolio/store', [CreatorProfileController::class, 'storeStep3'])
    ->name('creator-portfolio.store');

Route::post('/creator-final/store', [CreatorProfileController::class, 'storeStep4'])
    ->name('creator-final.store');

Route::view('/support-us', 'support-us')
    ->name('support-us');



Route::get('/extract-client-data/{token}', [ExtractClientDataController::class, 'index'])
    ->name('extract-client-data');



// campaign 
Route::get('/campaign-free-portfolio',
[
    CampaignFreePortfolioController::class,
    'index'
])->name('campaign.free.portfolio');

Route::post('/campaign-free-portfolio/store',
[
    CampaignFreePortfolioController::class,
    'store'
])->name('campaign.free.portfolio.store');
