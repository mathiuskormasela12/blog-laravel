<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;

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
