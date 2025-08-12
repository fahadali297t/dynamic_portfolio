<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialController;
use App\Models\FileManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->prefix('admin')->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // admin routes
    Route::get('/testimonial', [TestimonialController::class, 'getTestimonialPage'])->name('testimonial.list');
    Route::get('/new-testimonial', [TestimonialController::class, 'getAddTestimonialPage'])->name('testimonial.new');
    Route::post('/add-testimonial', [TestimonialController::class, 'addTestimonial'])->name('testimonial.add');
    Route::delete('/del-testimonial', [TestimonialController::class, 'delTestimonial'])->name('testimonial.del');
    Route::get('/edit-testimonial', [TestimonialController::class, 'getUpdateTestimonial'])->name('testimonial.edit');
    Route::post('/update-testimonial', [TestimonialController::class, 'UpdateTestimonial'])->name('testimonial.update');


    // For Services

    Route::get('/services', [ServicesController::class, 'getServicesPage'])->name('services.list');
    Route::get('/new-service', [ServicesController::class, 'getAddServicePage'])->name('service.new');
    Route::post('/add-service', [ServicesController::class, 'service'])->name('service.add');
    Route::delete('/del-service', [ServicesController::class, 'service'])->name('service.del');
    Route::get('/edit-service', [ServicesController::class, 'service'])->name('service.edit');
    Route::post('/update-service', [ServicesController::class, 'service'])->name('service.update');


    // For File Manager
    Route::get('/file-manager', [FileManagerController::class, 'view'])->name('file.view');
    Route::post('/file-manager', [FileManagerController::class, 'submit'])->name('file.submit');
    Route::delete('/file-delete', [FileManagerController::class, 'delete'])->name('file.delete');

    // Ajax route
    Route::get('/images', [FileManagerController::class, 'viewImage']);
});

require __DIR__ . '/auth.php';
