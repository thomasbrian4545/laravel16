<?php

use App\Http\Controllers\JurusanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jurusan/all', [JurusanController::class, 'all']);
Route::get('/jurusan/gabung', [JurusanController::class, 'gabung']);
Route::get('/jurusan/gabung-join', [JurusanController::class, 'gabungJoin']);


Route::prefix('/jurusan')->group(function () {
    Route::get('/find', [JurusanController::class, 'find']);
    Route::get('/where', [JurusanController::class, 'where']);
    Route::get('/all-join', [JurusanController::class, 'allJoin']);
    Route::get('/has', [JurusanController::class, 'has']);
    Route::get('/where-has', [JurusanController::class, 'whereHas']);
    Route::get('/doesnt-have', [JurusanController::class, 'doesntHave']);
    Route::get('/with-count', [JurusanController::class, 'withCount']);
    Route::get('/load-count', [JurusanController::class, 'loadCount']);
    Route::get('/insert-save', [JurusanController::class, 'insertSave']);
    Route::get('/insert-create', [JurusanController::class, 'insertCreate']);
    Route::get('/insert-create-many', [JurusanController::class, 'insertCreateMany']);
    Route::get('/update', [JurusanController::class, 'update']);
    Route::get('/update-push', [JurusanController::class, 'updatePush']);
    Route::get('/delete', [JurusanController::class, 'delete']);
});
