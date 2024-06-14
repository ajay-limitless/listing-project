<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SecurityFeatureController;
use App\Http\Controllers\Admin\FarmFeatureController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login')->middleware('guest');
Route::get('/admin/forgot-password', [AdminAuthController::class, 'passwordRequest'])->name('admin.password.request')->middleware('guest');

Route::group(['middleware' => ['auth', 'user.type:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile-password', [ProfileController::class, 'passwordUpdate'])->name('profile-password.update');


    // Hero Routes
    Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');

    //User Routes
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

    //Staff Routes
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');

    //Lead Routes
    Route::get('/leads', [LeadController::class, 'index'])->name('lead.index');
    Route::get('/leads/create', [LeadController::class, 'create'])->name('lead.create');
    Route::post('/leads/store', [LeadController::class, 'store'])->name('lead.store');
    Route::get('/leads/edit/{id}', [LeadController::class, 'edit'])->name('lead.edit');
    Route::post('/leads/update/{id}', [LeadController::class, 'update'])->name('lead.update');
    Route::delete('/leads/delete/{id}', [LeadController::class, 'destroy'])->name('lead.delete');

    //Agent Routes
    Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
    Route::get('/agent/create', [AgentController::class, 'create'])->name('agent.create');
    Route::get('/agent/edit/{id}', [AgentController::class, 'edit'])->name('agent.edit');
    Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store');

    //Property Routes
    Route::get('/property', [propertyController::class, 'index'])->name('property.index');
    Route::get('/property/create', [propertyController::class, 'create'])->name('property.create');
    Route::post('/property/store', [propertyController::class, 'store'])->name('property.store');

     //Amenity Routes
     Route::get('/amenity', [AmenityController::class, 'index'])->name('amenity.index');
     Route::get('/amenity/create', [AmenityController::class, 'create'])->name('amenity.create');
     Route::post('/amenity/store', [AmenityController::class, 'store'])->name('amenity.store');
     Route::post('/amenity/delete', [AmenityController::class, 'delete'])->name('amenity.delete');

     //Category Routes
     Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
     Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
     Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

     //Security Features Routes
     Route::get('/security_feature', [SecurityFeatureController::class, 'index'])->name('security_feature.index');
     Route::get('/security_feature/create', [SecurityFeatureController::class, 'create'])->name('security_feature.create');
     Route::post('/security_feature/store', [SecurityFeatureController::class, 'store'])->name('security_feature.store');

     Route::get('/farm_feature', [FarmFeatureController::class, 'index'])->name('farm_feature.index');
     Route::get('/farm_feature/create', [FarmFeatureController::class, 'create'])->name('farm_feature.create');
     Route::get('/farm_feature/store', [FarmFeatureController::class, 'store'])->name('farm_feature.store');

     Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
     Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
     Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');

     Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
     Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
     Route::get('/banner/store', [BannerController::class, 'store'])->name('banner.store');

});
