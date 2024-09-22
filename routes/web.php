<?php

use App\Http\Controllers\StudentIndexController;
use App\Http\Controllers\StudentCreateController;
use App\Http\Controllers\StudentStoreController;
use App\Http\Controllers\StudentShowController;
use App\Http\Controllers\StudentEditController;
use App\Http\Controllers\StudentUpdateController;
use App\Http\Controllers\StudentDestroyController;
use App\Http\Controllers\StudentViewController;

Route::get('/students', StudentIndexController::class)->name('student.index');
Route::get('/students/create', StudentCreateController::class)->name('student.create');
Route::post('/students', StudentStoreController::class)->name('student.store');
Route::get('/students/{id}', StudentShowController::class)->name('student.show');
Route::get('/students/{id}/edit', StudentEditController::class)->name('student.edit');
Route::put('/students/{id}', StudentUpdateController::class)->name('student.update');
Route::delete('/students/{id}', StudentDestroyController::class)->name('student.destroy');
Route::get('/student_view', StudentViewController::class)->name('student.view');


