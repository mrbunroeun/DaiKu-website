<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectCredentialController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/insights/{category}/{slug}', [InsightController::class, 'show'])->name('insights.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/insights', [InsightController::class, 'index'])->name('insights');
Route::post('/sendmail', [SendMailController::class, 'sendMail'])->name('send.mail');

/*
|--------------------------------------------------------------------------
| Service Detail Pages
|--------------------------------------------------------------------------
*/

Route::view(
    '/services/electrical-systems',
    'services.Electrical-Systems'
)->name('services.electrical');

Route::view(
    '/services/mechanical-systems',
    'services.Mechanical-Systems'
)->name('services.mechanical');

Route::view(
    '/services/mep-design-consultancy',
    'services.MEP-Design&Consultancy'
)->name('services.mep');

Route::view(
    '/services/plumbing-fire-systems',
    'services.Plumbing&Fire-Systems'
)->name('services.plumbing');

/*
|--------------------------------------------------------------------------
| Project Pages
|--------------------------------------------------------------------------
*/

// Project listing (optionally filtered by slug/category)
Route::get('/professional/project/{slug?}', [ProjectCredentialController::class, 'index'])
    ->name('project');

// Individual project detail page (e.g. /professional/project/detail/{project})
Route::get('/professional/project/detail/{project}', [ProjectController::class, 'show'])
    ->name('professional.project.show');

/*
|--------------------------------------------------------------------------
| Insights Detail Pages
|--------------------------------------------------------------------------
*/

Route::get('/insights/mechanical', fn() => view('insights.mechanical'))->name('insights.mechanical');
Route::get('/insights/electrical', fn() => view('insights.electrical'))->name('insights.electrical');
Route::get('/insights/plumbing',   fn() => view('insights.plumbing'))->name('insights.plumbing');
Route::get('/insights/mep',        fn() => view('insights.mep'))->name('insights.mep');
Route::get('/insights/facility',   fn() => view('insights.facility'))->name('insights.facility');