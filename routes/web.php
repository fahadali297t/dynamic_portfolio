<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Models\FileManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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


    // For File Manager
    Route::get('/file-manager', [FileManagerController::class, 'view'])->name('file.view');
    Route::post('/file-manager', [FileManagerController::class, 'submit'])->name('file.submit');
    Route::delete('/file-delete', [FileManagerController::class, 'delete'])->name('file.delete');
});

require __DIR__ . '/auth.php';
