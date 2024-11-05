<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CareerAptitudeTestQuestionController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [CampusController::class, 'showFour'])->name('majors.four');

Route::get('/perguruantinggi', [CampusController::class, 'listCampus']);

Route::get('/perguruantinggi/{id}', [CampusController::class, 'detailCampus']);

Route::get('/programstudi', [MajorController::class, 'listMajor']);

Route::get('/programstudi/{id}', [MajorController::class, 'detailMajor']);

Route::get('/tesminatbakat', function () {
    return view('test.career-aptitude-start');
});

Route::get('/riwayat/{id}', [ResultController::class, 'showHistory']);
Route::get('/riwayattes/{id}', [ResultController::class, 'showDetail']);

Route::get('/mulaites', [CareerAptitudeTestQuestionController::class, 'index'])->middleware('auth');

Route::get('/hasiltes', function () {
    return view('test.career-aptitude-result');
})->name('career-aptitude-result');

Route::post('/hasiltes', [ResultController::class, 'store'])->name('career-aptitude-result.store');

Route::get('/daftar', [AuthController::class, 'register'])->name('auth.register');
Route::post('/daftar', [AuthController::class, 'store'])->name('auth.store');

Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'authenticate'])->name('auth.authenticate');

Route::post('/keluar', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/editprofile', [AuthController::class, 'edit'])->name('editprofile');
Route::put('/editprofile', [AuthController::class, 'update'])->name('updateprofile');

Route::get('/search', [SearchController::class, 'search'])->name('search');

// Route::get('/details', function () {
//     return view('details');
// });

// Route::get('/arsip', function () {
//     return view('arsip');
// });

// Route::get('/forum', function () {
//     return view('forum');
// });