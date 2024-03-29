<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HadiahController;

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
Route::middleware(['auth', 'is_patient'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard'); 
});

Route::middleware(['auth', 'is_doctor'])->group(function () {
    Route::get('/doctor/dashboard', [DocterController::class, 'showDashboard'])->name('doctor.dashboard'); 
});

Route::middleware(['auth', 'is_patient'])->group(function () {
    Route::get('/patient/dashboard', [PatientController::class, 'showDashboard'])->name('patient.dashboard'); 
});


Route::get('/upload', [HomeController::class, 'upload']);
Route::post('/upload/proses', [HomeController::class, 'proses_upload']);

/*Routes atau alamat Controller untuk Student Mata kuliah */
Route::get('/datamatkul',[SubjectController::class, 'viewDataStudent']);

Route::get('/datamatkul/hapus/{id}', [SubjectController::class, 'delete']);

Route::get('/pengguna',[PenggunaController::class, 'index']);

Route::get('/article',[ArticleController::class, 'index']);
Route::get('/hadiah',[HadiahController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
