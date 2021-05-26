<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Admin\{
    DashboardController,VissionMissionController
};

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

Route::get('/', [PersonalController::class,'index']);

Route::middleware(['auth'])->prefix('/administrator')
    ->name('administrator.')
    ->group(function(){

    Route::get('',[DashboardController::class,'index'])
        ->name('dashboard');

    Route::resource('/vision-mission', VissionMissionController::class)
        ->only('index','edit','update');

});

require __DIR__.'/auth.php';