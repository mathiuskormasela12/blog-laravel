<?php

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
    return view('home');
});

Route::get('/materi', function () {
	return view('materi');
});

Route::get('/content', function () {
	return view('content');
});

Route::get('/information', function () {
	return view('information');
});

Route::get('/add-topic', function () {
	return view('add', [
		"name" => 'topic',
		"postUrl" => '/add-topic'
	]);
});

Route::get('/add-materi', function () {
	return view('add', [
		"name" => 'materi',
		"postUrl" => '/add-materi'
	]);
});

Route::get('/add-information', function () {
	return view('add', [
		"name" => 'information',
		"postUrl" => '/add-materi'
	]);
});

Route::get('/add-content', function () {
	return view('add', [
		"name" => 'content',
		"postUrl" => '/add-materi'
	]);
});

