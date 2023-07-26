<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;

use App\Http\Controllers\SubscriptionController;

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

/*------- index page -------*/
Route::get('/', function () {
    return view('index');
})->name('index');
/*-------------------------------*/

/*------- about-us page -------*/
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
/*-------------------------------*/

/*------- admin-sign-in page -------*/
Route::get('/admin-sign-in', function () {
    return view('admin-sign-in');
})->name('admin-sign-in');
/*-------------------------------*/

/*------- admin-sign-up page -------*/
Route::get('/admin-sign-up', function () {
    return view('admin-sign-up');
})->name('admin-sign-up');
/*-------------------------------*/

/*------- Admin registration route -------*/
Route::post('/admin/register', [AdministratorController::class, 'register'])->name('admin.register');
/*-------------------------------*/

/*------- privacy-policy page -------*/
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
/*-------------------------------*/

/*------- student-sign-in page -------*/
Route::get('/student-sign-in', function () {
    return view('student-sign-in');
})->name('student-sign-in');
/*-------------------------------*/

/*------- student-sign-up page -------*/
Route::get('/student-sign-up', function () {
    return view('student-sign-up');
})->name('student-sign-up');
/*-------------------------------*/

/*------- Student registration route -------*/
Route::post('/student/register', [StudentController::class, 'register'])->name('student.register');
/*-------------------------------*/

/*------- team page -------*/
Route::get('/team', function () {
    return view('team');
})->name('team');
/*-------------------------------*/

/*------- terms-of-use page -------*/
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
})->name('terms-of-use');
/*-------------------------------*/

/*------- tutor-sign-in page -------*/
Route::get('/tutor-sign-in', function () {
    return view('tutor-sign-in');
})->name('tutor-sign-in');
/*-------------------------------*/

/*------- tutor-sign-up page -------*/
Route::get('/tutor-sign-up', function () {
    return view('tutor-sign-up');
})->name('tutor-sign-up');
/*-------------------------------*/

/*------- Tutor registration route -------*/
Route::post('/tutor/register', [TutorController::class, 'register'])->name('tutor.register');
/*-------------------------------*/

/*--------------------------------------------------- admin ---------------------------------------------------*/

/*------- education-level page -------*/
Route::get('/admin/education-level', function () {
    return view('admin.education-level');
})->name('admin.education-level');
/*-------------------------------*/

/*------- admin home page -------*/
Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');
/*-------------------------------*/

/*------- package page -------*/
Route::get('/admin/package', function () {
    return view('admin.package');
})->name('admin.package');
/*-------------------------------*/

/*------- admin profile page -------*/
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');
/*-------------------------------*/

/*------- admin profile-edit page -------*/
Route::get('/admin/profile-edit', function () {
    return view('admin.profile-edit');
})->name('admin.profile-edit');
/*-------------------------------*/

/*------- service page -------*/
Route::get('/admin/service', function () {
    return view('admin.service');
})->name('admin.service');
/*-------------------------------*/

/*------- subject page -------*/
Route::get('/admin/subject', function () {
    return view('admin.subject');
})->name('admin.subject');
/*-------------------------------*/

/*------- subscription page -------*/
Route::get('/admin/subscription', function () {
    return view('admin.subscription');
})->name('admin.subscription');
/*-------------------------------*/

/*------- subscription-details page -------*/
Route::get('/admin/subscription-details', function () {
    return view('admin.subscription-details');
})->name('admin.subscription-details');
/*-------------------------------*/

/*-------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------- student ---------------------------------------------------*/

/*------- student home page -------*/
Route::get('/student/home', function () {
    return view('student.home');
})->name('student.home');
/*-------------------------------*/

/*------- student profile page -------*/
Route::get('/student/profile', function () {
    return view('student.profile');
})->name('student.profile');
/*-------------------------------*/

/*------- student profile-edit page -------*/
Route::get('/student/profile-edit', function () {
    return view('student.profile-edit');
})->name('student.profile-edit');
/*-------------------------------*/

/*------- student schedule page -------*/
Route::get('/student/schedule', function () {
    return view('student.schedule');
})->name('student.schedule');
/*-------------------------------*/

/*------- student subscription page -------*/
Route::get('/student/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
/*Route::get('/student/subscription', function () {
    return view('student.subscription');
})->name('student.subscription');*/
/*-------------------------------*/

/*---------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------- tutor ---------------------------------------------------*/

/*------- tutor home page -------*/
Route::get('/tutor/home', function () {
    return view('tutor.home');
})->name('tutor.home');
/*-------------------------------*/

/*------- tutor profile page -------*/
Route::get('/tutor/profile', function () {
    return view('tutor.profile');
})->name('tutor.profile');
/*-------------------------------*/

/*------- tutor profile-edit page -------*/
Route::get('/tutor/profile-edit', function () {
    return view('tutor.profile-edit');
})->name('tutor.profile-edit');
/*-------------------------------*/

/*------- tutor schedule page -------*/
Route::get('/tutor/schedule', function () {
    return view('tutor.schedule');
})->name('tutor.schedule');
/*-------------------------------*/

/*------- tutor subscription page -------*/
Route::get('/tutor/subscription', function () {
    return view('tutor.subscription');
})->name('tutor.subscription');
/*-------------------------------*/

/*-------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------- frame ---------------------------------------------------*/

/*------- admin-head page -------*/
Route::get('/frame/admin-head', function () {
    return view('frame.admin-head');
})->name('frame.admin-head');
/*-------------------------------*/

/*------- admin-navbar page -------*/
Route::get('/frame/admin-navbar', function () {
    return view('frame.admin-navbar');
})->name('frame.admin-navbar');
/*-------------------------------*/

/*------- footer page -------*/
Route::get('/frame/footer', function () {
    return view('frame.footer');
})->name('frame.footer');
/*-------------------------------*/

/*------- index-head page -------*/
Route::get('/frame/index-head', function () {
    return view('frame.index-head');
})->name('frame.index-head');
/*-------------------------------*/

/*------- index-navbar page -------*/
Route::get('/frame/index-navbar', function () {
    return view('frame.index-navbar');
})->name('frame.index-navbar');
/*-------------------------------*/

/*------- script page -------*/
Route::get('/frame/script', function () {
    return view('frame.script');
})->name('frame.script');
/*-------------------------------*/

/*------- student-head page -------*/
Route::get('/frame/student-head', function () {
    return view('frame.student-head');
})->name('frame.student-head');
/*-------------------------------*/

/*------- student-navbar page -------*/
Route::get('/frame/student-navbar', function () {
    return view('frame.student-navbar');
})->name('frame.student-navbar');
/*-------------------------------*/

/*------- tutor-head page -------*/
Route::get('/frame/tutor-head', function () {
    return view('frame.tutor-head');
})->name('frame.tutor-head');
/*-------------------------------*/

/*------- tutor-navbar page -------*/
Route::get('/frame/tutor-navbar', function () {
    return view('frame.tutor-navbar');
})->name('frame.tutor-navbar');
/*-------------------------------*/

/*-------------------------------------------------------------------------------------------------------------*/
