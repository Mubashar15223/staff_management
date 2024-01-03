<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Expenses\OverviewController;
use App\Http\Controllers\Header\HeaderController;
use App\Http\Controllers\profile\CustomerOverviewController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\profile\SettingController;
use App\Http\Controllers\Staff\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Expenses\ThemeController;
use App\Http\Controllers\Expenses\ServerController;
use App\Http\Controllers\Expenses\ApiServerController;
use App\Http\Controllers\Expenses\AdsPayController;
use App\Http\Controllers\Expenses\PluginController;
use App\Http\Controllers\Expenses\SoftwareController;



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


Route::get('ajex', function () {
    return view('ajex');
});



// Auth::routes();
Route::get('login',[LoginController::class, 'showLogin'])->name('login');
//  socialite  url
Route::get('googlelogin',[LoginController:: class, 'googlelogin']);
Route::get('logout',[LoginController:: class, 'logout']);

Route::get('auth/google/callback',[LoginController:: class, 'getAuthLoginData']);
// Route::get('auth/google/callback', function () {
//     $user = Socialite::driver('google')->user();
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('/user/sendVerificationEmail', [RegisterController::class, 'sendVerificationEmail'])->name('email.send_verify_email');
Route::post('/user/savePassword', [RegisterController::class, 'savePassword'])->name('password.save');


Route::get('projects/under_development', [ProjectController::class, 'under_development'])->name('projects.under_development');
Route::resource('/projects', ProjectController::class);


Route::resource('expenses/server', ServerController::class);
Route::resource('expenses/apiServer', ApiServerController::class);
Route::resource('expenses/adsPay', AdsPayController::class);
Route::resource('expenses/theme', ThemeController::class);

Route::resource('expenses/plugin', PluginController::class);
Route::resource('expenses/software', SoftwareController::class);
Route::resource('profile', ProfileController::class);
Route::resource('settings',SettingController::class);
Route::resource('customer_overview',CustomerOverviewController::class);

Route::resource('staff/overview',StaffController::class);
Route::get('overview/traffic', [StaffController::class, 'traffic'])->name('overview.traffic');
Route::get('overview/status', [StaffController::class, 'status'])->name('overview.status');
Route::resource('header',HeaderController::class);

Route::resource('expenses/overview',OverviewController::class);



Route::domain('{subdomain}.localhost')->group(function(){
    // return redirect()->route('prjects.create');
});