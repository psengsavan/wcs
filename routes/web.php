<?php

use App\Http\Controllers\AgronauteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AgronauteController::class, 'index' ]);
Route::post('addAgronaute', [AgronauteController::class, 'create']);