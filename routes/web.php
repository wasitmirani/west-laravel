<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

#Route::get('/', function () {
 #   return view('welcome');
#});

route::get('/', [UserController::class, 'index'])->name('index');
route::get('/About-us', [UserController::class, 'about'])->name('about');
route::get('/Services', [UserController::class, 'service'])->name('service');
route::get('/Portfolio', [UserController::class, 'portfolio'])->name('portfolio');
route::get('/Contact-us', [UserController::class, 'contact'])->name('contact');
route::get('/Privacy-Policy', [UserController::class, 'Privacy_Policy'])->name('Privacy_Policy');
route::get('/Terms & Conditions', [UserController::class, 'terms_conditions'])->name('terms_conditions');
route::get('/Our-Team', [UserController::class, 'team'])->name('team');
route::get('/Pricing-Table', [UserController::class, 'pricing_table'])->name('pricing_table');
route::get('/2D-Animation', [UserController::class, 'animation2D'])->name('animation2D');
route::get('/3D-Animation', [UserController::class, 'animation3D'])->name('animation3D');
route::get('/Logo-Animation', [UserController::class, 'logo_animation'])->name('logo_animation');
route::get('/Explainer-Videos', [UserController::class, 'explainer_videos'])->name('explainer_videos');
route::get('/Typography', [UserController::class, 'typography'])->name('typography');
route::get('/ScreenCast', [UserController::class, 'screencast'])->name('screencast');
route::get('/Whiteboard-Animation', [UserController::class, 'whiteboard'])->name('whiteboard');
route::get('/Illustrations', [UserController::class, 'illustration'])->name('illustration');
route::get('/Case-Study', [UserController::class, 'case_study'])->name('case_study');



Route::get('/email', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/email', [App\Http\Controllers\UserController::class, 'sendEmail'])->name('send.email');
