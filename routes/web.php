<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/score', [HomeController::class, 'getGraduantsResults'])->name('score');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news/{id}', [HomeController::class, 'showNews'])->name('single');

Route::post('contact/post', [HomeController::class, 'storeFeedback'])->name('student.contact');

// php artisan filament:resource Admin
// php artisan filament:resource NewsletterSubscription
// php artisan filament:resource Graduation
// php artisan filament:resource Timer
// php artisan filament:resource Resource
// php artisan filament:resource News
// php artisan filament:resource Message
// php artisan filament:resource Faq
// php artisan filament:resource User
