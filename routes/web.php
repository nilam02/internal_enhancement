<?php

use Illuminate\Support\Facades\Route;

use Symfony\Component\Process\Process;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\ProblemController;


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

Route::post('/runcode', [CodeController::class, 'runCode']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assesment', function () {
    return view('assesmentTest');
});

Route::get('/upload-problem', [ProblemController::class, 'create']);
Route::post('/upload-problem', [ProblemController::class, 'store']);
Route::get('/get-problem-statement', [ProblemController::class, 'getStatement']);
