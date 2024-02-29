<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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
    return view('Hello World');
});

Route::get('/', function () {
    return view('Hello World');
});




Route::get('/risma',[VoterController::class, 'viewVoter']);


/*Routes atau alamat Controller untuk User Mahasiswa */
Route::get('/datamahasiswa',[UserController::class, 'viewDataUser']);

/*Routes atau alamat untuk Controller untuk Teacher gugur */
Route::get('/datagugur',[UserController::class, 'viewTeacher']);

/*Routes atau alamat Controller untuk Student Pendaftar */
Route::get('/datapendaftar',[UserController::class, 'viewDataStudent']);

/*Routes atau alamat Controller untuk user dosen */
Route::get('/datadosen',[SubjectController::class, 'viewDataUser']);

/*Routes atau alamat Controller untuk Student Mata kuliah */
Route::get('/datamatkul',[SubjectController::class, 'viewDataStudent']);

/*Routes atau alamat Controller untuk teacher Mata kuliah */
Route::get('/dataruangan',[SubjectController::class, 'viewDataTeacher']);

/*Routes atau alamat untuk project task */
Route::get('/task',[TaskController::class, 'index']);

/*Routes atau alamat untuk create task */
Route::get('/task/create',[TaskController::class, 'create']);

/*Routes atau alamat untuk create task */
Route::post('/task/store',[TaskController::class, 'store']);

/*Routes atau alamat untuk create task */
Route::get('/task/{task}',[TaskController::class, 'show']);

Route::get('/task/{task}/edit',[TaskController::class, 'edit']);
Route::put('/task/{id}', [TaskController::class, 'Showupdate']);


?>

