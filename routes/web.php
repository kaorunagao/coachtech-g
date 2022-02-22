<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::prefix('todo')->group(function () {
  Route::get('/', [TodoController::class, 'index']);
  Route::post('/', [ContactController::class, 'post']);
  Route::post('/create', [TodoController::class, 'create']);
  Route::post('/update', [TodoController::class, 'update']);
  Route::post('/delete', [TodoController::class, 'delete']);
});


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/create', function () {
    return view('index');
});

Route::post('/update', function () {
    return view('index');
});

Route::post('/delete', function () {
    return view('index');
});