<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DatabaseUserController;

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

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('dashboards', DashboardController::class);
Route::resource('campaigns', CampaignController::class);

Route::post('upload-file', [DatabaseUserController::class, 'upload'])->name('database-users.upload');
Route::get('database-users/update-status/{id}', [DatabaseUserController::class, 'updateStatus'])->name('database-users.updateStatus');
Route::resource('database-users', DatabaseUserController::class);
