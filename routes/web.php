<?php

use App\Http\Controllers\GalleryController ;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CompanyContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyServiceController;
use App\Http\Controllers\FarmerAdvicesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GeneralAdvicesController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WhyUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    //slider
    Route::resource('/home-slider', HomeSliderController::class);
    //admin-company
    Route::resource('/admin-company', CompanyController::class);
    //admin-company-contact
    Route::resource('/admin-company-contact', CompanyContactController::class);
    Route::get('admin-contact-form', [CompanyContactController::class, 'contactForm'])->name('admin-contact-form');
    //whyus
    Route::resource('/whyus', WhyUsController::class);
    //admin-feedback
    Route::resource('/admin-feedback', FeedbackController::class);
    //blogs
    Route::resource('/admin-blogs', BlogsController::class);

    //gallery-category
    Route::resource('/admin-gallery-category', GalleryCategoryController::class);
    Route::resource('/admin-gallery', GalleryController::class);
    //admin-products
    Route::resource('/admin-products', ProductController::class);
       //team
       Route::resource('admin-team', TeamController::class);
       Route::resource('admin-partners', PartnersController::class);
       //service

 Route::resource('company-service', CompanyServiceController::class);
 Route::resource('general-advices', GeneralAdvicesController::class);
 Route::resource('farmer-advices', FarmerAdvicesController::class);
});

require __DIR__ . '/auth.php';
