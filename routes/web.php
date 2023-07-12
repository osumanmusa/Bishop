<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/bishop', function () {
    return Inertia::render('bishop');
});
Route::get('/Events', function () {
    return Inertia::render('Events');
});
Route::get('/Join', function () {
    return Inertia::render('Join');
});
Route::get('/Contact', function () {
    return Inertia::render('Contact');
});


require __DIR__.'/auth.php';
