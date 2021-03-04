<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Models\User;

// auth()->setUser(User::find(1));
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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetsController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetsController::class, 'store']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
