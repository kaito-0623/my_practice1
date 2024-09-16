<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::get('/school', [SchoolController::class, 'schoolView']);
