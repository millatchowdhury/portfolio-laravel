<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;




// page route 
Route::get('/', [HomeController::class, 'page'])->name('home.Page');
Route::get('/resume', [ResumeController::class, 'page'])->name('resume.Page');
Route::get('/project', [ProjectController::class, 'page'])->name('project.Page');
Route::get('/contact', [ContactController::class, 'page'])->name('contact.Page');



// Request Route 
Route::post('/contactRequest', [ContactController::class, 'contactRequest'])->name('contact.Request');
Route::get('/heroRequest', [HomeController::class, 'heroRequest'])->name('hero.Request');
Route::get('/aboutRequest', [HomeController::class, 'aboutRequest'])->name('about.Request');
Route::get('/socialRequest', [HomeController::class, 'socialRequest'])->name('social.Request');
Route::get('/resumeDownloadRequest', [ResumeController::class, 'resumeDownloadRequest'])->name('resume.Download.Request');
Route::get('/experienceRequest', [ResumeController::class, 'experienceRequest'])->name('experience.Request');
