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