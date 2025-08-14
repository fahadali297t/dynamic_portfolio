<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Models\FileManager;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'viewHome'])->name('home');

Route::view('/test', 'test');
Route::group(['as' => 'user.'], function () {
    // 
    Route::get('/services', [UserController::class, 'services'])->name('services');
    Route::get('/services/{id}', [UserController::class, 'singleService'])->name('services.view');

    Route::get('/projects', [UserController::class, 'projects'])->name('projects');
    Route::get('/projects/{id}', [UserController::class, 'singleProject'])->name('projects.view');

    // 
});



// ===================== for admin  =============================================================
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->prefix('admin')->name('dashboard');

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
    Route::post('/add-service', [ServicesController::class, 'addService'])->name('service.add');
    Route::delete('/del-service', [ServicesController::class, 'delService'])->name('service.del');
    Route::get('/edit-service', [ServicesController::class, 'editService'])->name('service.edit');
    Route::post('/update-service', [ServicesController::class, 'updateService'])->name('service.update');

    // For Work

    Route::get('/projects', [WorkController::class, 'getworksPage'])->name('work.list');
    Route::get('/new-project', [WorkController::class, 'getAddWorkPage'])->name('work.new');
    Route::post('/add-project', [WorkController::class, 'addWork'])->name('work.add');
    Route::delete('/del-project', [WorkController::class, 'delWork'])->name('work.del');
    Route::get('/edit-project', [WorkController::class, 'editWork'])->name('work.edit');
    Route::post('/update-project', [WorkController::class, 'updateWork'])->name('work.update');

    // For Education
    Route::get('/education', [EducationController::class, 'list'])->name('edu.list');
    Route::get('/new-education', [EducationController::class, 'new'])->name('edu.new');
    Route::post('/add-education', [EducationController::class, 'add'])->name('edu.add');
    Route::delete('/del-education', [EducationController::class, 'del'])->name('edu.del');
    Route::get('/edit-education', [EducationController::class, 'edit'])->name('edu.edit');
    Route::post('/update-education', [EducationController::class, 'update'])->name('edu.update');

    // For Experience
    Route::get('/experience', [ExperienceController::class, 'list'])->name('exp.list');
    Route::get('/new-experience', [ExperienceController::class, 'new'])->name('exp.new');
    Route::post('/add-experience', [ExperienceController::class, 'add'])->name('exp.add');
    Route::delete('/del-experience', [ExperienceController::class, 'del'])->name('exp.del');
    Route::get('/edit-experience', [ExperienceController::class, 'edit'])->name('exp.edit');
    Route::post('/update-experience', [ExperienceController::class, 'update'])->name('exp.update');

    // for skills

    Route::get('/Skills', [SkillController::class, 'list'])->name('skill.list');
    Route::get('/new-Skills', [SkillController::class, 'new'])->name('skill.new');
    Route::post('/add-Skills', [SkillController::class, 'add'])->name('skill.add');
    Route::delete('/del-Skills', [SkillController::class, 'del'])->name('skill.del');
    Route::get('/edit-Skills', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('/update-Skills', [SkillController::class, 'update'])->name('skill.update');

    // For File Manager
    Route::get('/file-manager', [FileManagerController::class, 'view'])->name('file.view');
    Route::post('/file-manager', [FileManagerController::class, 'submit'])->name('file.submit');
    Route::delete('/file-delete', [FileManagerController::class, 'delete'])->name('file.delete');

    // Ajax route
    Route::get('/images', [FileManagerController::class, 'viewImage']);
    Route::get('/pdf', [FileManagerController::class, 'viewPdf']);
    Route::post('/pdf-submit', [UserController::class, 'addResume'])->name('resume.add');
});

require __DIR__ . '/auth.php';
