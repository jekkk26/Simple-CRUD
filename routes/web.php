<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangJenisBarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\SesiController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/admin/staf', [AdminController::class, 'staf'])->middleware('userAkses:staf');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/admin/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/update/{id}', [BarangController::class, 'update']);
Route::get('/destory/barang/{id}', [BarangController::class, 'delete'])->name('barang.destroy');
Route::get('/barang', [BarangController::class, 'index'])->name('index');


Route::get('/barang/jenis', [JenisBarangController::class, 'index'])->name('jenisbarang.index');
Route::get('/create/jenisbarang', [JenisBarangController::class, 'create'])->name('jenisbarang.create');
Route::post('/store/jenisbarang', [JenisBarangController::class, 'store'])->name('jenisbarang.store');
Route::get('/edit/jenis/{id}', [JenisBarangController::class, 'edit'])->name('jenisbarang.edit');
Route::post('/jenis/update/{id}', [JenisBarangController::class, 'update'])->name('update');
Route::get('/destroy/jenisbarang/{id}', [JenisBarangController::class, 'destroy'])->name('destroy');

Route::get('/barang/barangdanjenis', [BarangJenisBarangController::class, 'index'])->name('barangjenisbarang.index');
Route::get('/create/barangjenisbarang', [BarangJenisBarangController::class, 'create'])->name('barangjenisbarang.create');
Route::post('/store/barangjenisbarang', [BarangJenisBarangController::class, 'store'])->name('barangjenisbarang.store');
Route::get('/edit/barangjenis/{idbarangjenisbarang}', [BarangJenisBarangController::class, 'edit'])->name('barangjenisbarang.edit');
Route::post('/update/barangjenis/{idbarangjenisbarang}', [BarangJenisBarangController::class, 'update'])->name('barangjenisbarang.update');
Route::delete('/destroy/barangjenis/{id}', [BarangJenisBarangController::class, 'destroy'])->name('destroy');
