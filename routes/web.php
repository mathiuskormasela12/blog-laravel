<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\InformationController;

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

Route::get('/', [TopicController::class, 'index']);
Route::get('/add-topic', [TopicController::class, 'create']);
Route::post('/add-topic', [TopicController::class, 'store']);
Route::get('/detail-topic/{id}', [TopicController::class, 'detail']);
Route::post('/detail-topic/{id}', [TopicController::class, 'update']);
Route::post('/detail-topic-delete/{id}', [TopicController::class, 'remove']);

Route::get('/materi', [MateriController::class, 'index']);
Route::get('/add-materi', [MateriController::class, 'create']);
Route::post('/add-materi', [MateriController::class, 'store']);
Route::get('/detail-materi/{id}', [MateriController::class, 'detail']);
Route::post('/detail-materi/{id}', [MateriController::class, 'update']);
Route::post('/detail-materi-delete/{id}', [MateriController::class, 'remove']);

Route::get('/content', [ContentController::class, 'index']);
Route::get('/add-content', [ContentController::class, 'create']);
Route::post('/add-content', [ContentController::class, 'store']);
Route::get('/detail-content/{id}', [ContentController::class, 'detail']);
Route::post('/detail-content/{id}', [ContentController::class, 'update']);
Route::post('/detail-content-delete/{id}', [ContentController::class, 'remove']);

Route::get('/information', [InformationController::class, 'index']);
Route::get('/add-information', [InformationController::class, 'create']);
Route::post('/add-information', [InformationController::class, 'store']);
Route::get('/detail-information/{id}', [InformationController::class, 'detail']);
Route::post('/detail-information/{id}', [InformationController::class, 'update']);
Route::post('/detail-information-delete/{id}', [InformationController::class, 'remove']);


