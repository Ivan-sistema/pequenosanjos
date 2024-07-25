<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    $data['users'] = [];
    $data['profiles'] = [];
    return view('home', $data);
})->name('home');

//SITE
Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/', [PageController::class, 'form_action'])->name('form_action');
Route::get('/doacao', [PageController::class, 'doacao'])->name('doacao');

//AUTH
Route::get('/login', function(){return view('auth.login');})->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/select-profile', [AuthController::class, 'select_profile'])->name('select-profile');
Route::post('/select-profile', [AuthController::class, 'select_profile_action'])->name('select_profile_action');


//DASHBOARD

Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
