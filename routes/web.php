<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\DashParser;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//PAGES
Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/', [PageController::class, 'form_action'])->name('form_action');
Route::get('/doacao', [PageController::class, 'doacao'])->name('doacao');
Route::post('/', [PageController::class, 'store'])->name('contato.store');

//AUTH
Route::get('/login', function(){return view('auth.login');})->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register_action');






Route::middleware(['auth'])->group(function(){

Route::get('/select-profile', [AuthController::class, 'select_profile'])->name('select-profile');
Route::post('/select-profile', [AuthController::class, 'select_profile_action'])->name('select_profile_action');

//DASHBOARD

Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
Route::get('dashboard/minha-conta', [DashboardController::class, 'my_account'])->name('my_account');
Route::post('dashboard/minha-conta', [DashboardController::class, 'my_account_action'])->name('my_account_action');


Route::get('dashboard/usuarios', [DashboardController::class, 'users'])->name('users');
Route::get('dashboard/novo-usuario', [DashboardController::class, 'new_user'])->name('new-user');
Route::post('dashboard/novo-usuario', [DashboardController::class, 'new_user_action'])->name('new_user_action');

Route::get('/dashboard/mensagem/{contatoId}', [DashboardController::class, 'read_message'])->name('mensagem');
Route::get('dashboard/emails', [EmailController::class, 'all_email'])->name('all_email');
Route::post('dashboard/emails', [EmailController::class, 'store'])->name('email.store');
Route::get('dashboard/novo-email', [EmailController::class, 'new_email'])->name('new_email');
Route::get('dashboard/email/{emailId}', [EmailController::class, 'read'])->name('email.read');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


