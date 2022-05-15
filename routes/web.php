<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Response;



Route::get('Coursee',[CourseController::class,"index"])
    ->name('courseGet');


