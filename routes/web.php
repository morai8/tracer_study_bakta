<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/tracer2', function () {
    return view('tracer2');
});
Route::get('/tracer3', function () {
    return view('tracer3');
});
Route::get('/tracer4', function () {
    return view('tracer4');
});
Route::get('/tracer5', function () {
    return view('tracer5');
});
Route::get('/tracer6', function () {
    return view('tracer6');
});
Route::get('/tracer7', function () {
    return view('tracer7');
});
Route::get('/tracerCollege', function () {
    return view('tracerCollege');
});
Route::get('/tracerCollegeFinal', function () {
    return view('tracerCollegeFinal');
});
Route::get('/tracerHope', function () {
    return view('tracerHope');
});
Route::get('/tracerHopeFinal', function () {
    return view('tracerHopeFinal');
});
Route::get('/tracerStatus', function () {
    return view('tracerStatus');
});
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/leaderboard', function () {
    return view('leaderboard');
});
Route::get('tracer_status', [Controller::class, 'chooseStatus']);