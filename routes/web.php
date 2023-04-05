<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\websiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test',function (){
    dd('a im online');
});

Route::get('/', [websiteController::class, 'home'])->name('website');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//admin
Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::post('update', [HomeController::class, 'update'])->name('home.update');
    Route::get('download_cv/{cv}', [HomeController::class,'download_cv'])->name('downloadcv');

});
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [AboutController::class, 'index'])->name('about.index');
    Route::post('update', [AboutController::class, 'update'])->name('about.update');
});
Route::group(['prefix' => 'skill'], function () {
    Route::get('/', [SkillController::class, 'index'])->name('skill.index');
    Route::post('store', [SkillController::class, 'store'])->name('skill.store');
    Route::get('edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('update/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::get('delete/{id}', [SkillController::class, 'delete'])->name('skill.delete');

});
Route::group(['prefix' => 'experience'], function () {
    Route::get('/', [ExperienceController::class, 'index'])->name('experience.index');
    Route::post('store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('delete/{id}', [ExperienceController::class, 'delete'])->name('experience.delete');

});
Route::group(['prefix' => 'project'], function () {
    Route::get('/', [ProjectController::class, 'index'])->name('project.index');
    Route::post('store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::get('delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');

});
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('update', [ContactController::class, 'update'])->name('contact.update');
});