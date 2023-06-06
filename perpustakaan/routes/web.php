<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanController;

// praktikum 10
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;

// praktikum 11
use App\Http\Controllers\MemberController;

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
    return view('welcome');
});

// praktikum 8
Route::get(
    '/handsome', function () {
        return 'Assalamualaikum Laravel';
    }
);

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

// Tugas Praktikum 8
Route::get('/tes_kesehatan', function () {
    return view('tes_kesehatan');
});

// praktikum 9
Route::get('/form-registrasi-anggota',[RegistrasiAnggotaController::class, 'index']);

Route::post('/hasil-regist',[RegistrasiAnggotaController::class, 'hasil']);

// Tugas Praktikum 9
Route::get('/peminjaman-buku',[PeminjamanController::class, 'index']);

Route::post('/hasil-pinjam',[PeminjamanController::class, 'hasil']);

// praktikum 10
Route::get('/dashboard',[DashboardController::class, 'index']);

// praktikum 11
Route::get('/book',[BookController::class, 'index']);
Route::get('/member',[MemberController::class, 'index']);

// praktikum 12

Route::get('book/create',[BookController::class, 'create']);
Route::post('book/store',[BookController::class, 'store']);
Route::delete('book/destroy/{id}',[BookController::class, 'destroy']);

Route::get('member/create',[MemberController::class, 'create']);
Route::post('member/store',[MemberController::class, 'store']);
Route::delete('member/destroy/{id}',[MemberController::class, 'destroy']);


