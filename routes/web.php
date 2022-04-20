<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\ElemenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KriteriaUnjukKerjaController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\UnitKompetensiController;

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

//Belajar
// Route::get('belajar', function () {
// 	return view('belajar');
// });
// Route::get('bisa/{nama}','BisaController@index');
// Route::post('/formulir','BisaController@formulir');
// Route::post('/formulir/proses','BisaController@proses');


// ///End Belajar
Route::get('/', function () {
    return view('landing_page.layout.main');
 });
// Route::get('/admin', function () {
//     return view('admin.layout_admin.main');
// });
// // Route::get('/skema', function () {
// //     return view('skema');
// // });
// // Route::get('/asesor', function () {
// //     return view('asesor');
// // });
// Route::get('/asesi', function () {
//     return view('asesi');
// });
// Route::get('/sertifikat', function () {
//     return view('sertifikat');
// });
// Route::get('/beranda', function () {
//     return view('beranda');
// });
// Route::get('/skema', function () {
//     return view('admin.skema.crud_skema');
// });

// Data Asesor
Route::get('/asesor',[App\Http\Controllers\AsesorController::class,'index'])->name('asesor.index');
Route::get('/asesor/create', [AsesorController::class,'create'])->name('asesor.create');
Route::post('/asesor/store', [AsesorController::class,'store'])->name('asesor.store');
Route::get('/asesor/edit/{id?}', [AsesorController::class,'edit'])->name('asesor.edit');
Route::put('/asesor/update/{id?}',[AsesorController::class,'update'])->name('asesor.update');
Route::delete('/asesor/destroy/{id}',[AsesorController::class,'destroy'])->name('asesor.destroy');

// Data Elemen 
Route::get('elemen', [App\Http\Controllers\ElemenController::class, 'index'])->name('elemen.index');
Route::get('/elemen/create', [ElemenController::class,'create'])->name('elemen.create');
Route::post('/elemen/store', [ElemenController::class,'store'])->name('elemen.store');
Route::get('/elemen/edit/{id?}', [ElemenController::class,'edit'])->name('elemen.edit');
Route::put('/elemen/update/{id?}', [ElemenController::class,'update'])->name('elemen.update');
Route::delete('/elemen/destroy/{id?}', [ElemenController::class,'destroy'])->name('elemen.destroy');
Route::get('/elemen/cari', 'ElemenController@cari')->name('elemen.cari');

// Data Jadwal
Route::get('jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal.index');
Route::get('jadwal/create', [JadwalController::class,'create'])->name('jadwal.create');
Route::post('jadwal/store',[JadwalController::class,'store'])->name('jadwal.store');
Route::get('jadwal/edit/{id}',[JadwalController::class,'edit'])->name('jadwal.edit');
Route::put('jadwal/update{id}',[JadwalController::class,'update'])->name('jadwal.update');
// Route::delete('jadwal/hapus/{id}','JadwalController@destroy')->name('jadwal.destroy');

// Data Kriteria Unjuk Kerja
Route::get('kriteriaunjukkerja', [App\Http\Controllers\KriteriaUnjukKerjaController::class, 'index'])->name('kriteriaunjukkerja.index');
Route::get('/kriteriaunjukkerja/create', [KriteriaUnjukKerjaController::class,'create'])->name('kriteriaunjukkerja.create');
Route::post('/kriteriaunjukkerja/store', [KriteriaUnjukKerjaController::class,'store'])->name('kriteriaunjukkerja.store');
Route::get('/kriteriaunjukkerja/edit/{id?}', [KriteriaUnjukKerjaController::class,'edit'])->name('kriteriaunjukkerja.edit');
Route::put('/kriteriaunjukkerja/update/{id?}', [KriteriaUnjukKerjaController::class,'update'])->name('kriteriaunjukkerja.update');
Route::delete('/kriteriaunjukkerja/destroy/{id?}', [KriteriaUnjukKerjaController::class,'destroy'])->name('kriteriaunjukkerja.destroy');
// Route::get('/kriteriaunjukkerja/cari', 'KriteriaUnjukKerjaController@cari')->name('kriteriaunjukkerja.cari');

// Data Skema 
Route::get('skema', [App\Http\Controllers\SkemaController::class, 'index'])->name('skema.index');
Route::post('/skema/create', [SkemaController::class,'create'])->name('skema.create');
Route::post('/skema/store', [SkemaController::class,'store'])->name('skema.store');
Route::get('/skema/edit/{id?}', [SkemaController::class,'edit'])->name('skema.edit');
Route::put('/skema/update/{id?}', [SkemaController::class,'update'])->name('skema.update');
Route::delete('/skema/destroy/{id?}', [SkemaController::class,'destroy'])->name('skema.destroy');

// Data Unit Kompetensi
Route::get('unitkompetensi', [App\Http\Controllers\UnitKompetensiController::class, 'index'])->name('unitkompetensi.index');
Route::post('/unitkompetensi/create', [UnitKompetensiController::class,'create'])->name('unitkompetensi.create');
Route::post('/unitkompetensi/store', [UnitKompetensiController::class,'store'])->name('unitkompetensi.store');
Route::get('/unitkompetensi/edit/{id?}', [UnitKompetensiController::class,'edit'])->name('unitkompetensi.edit');
Route::put('/unitkompetensi/update/{id?}', [UnitKompetensiController::class,'update'])->name('unitkompetensi.update');
Route::delete('/unitkompetensi/destroy/{id?}', [UnitKompetensiController::class,'destroy'])->name('unitkompetensi.destroy');
