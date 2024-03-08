<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SertiController;
use App\Http\Controllers\ShowController;
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

Route::get('/',[ShowController::class ,'getData'])->name('home');


Route::prefix('auth')->group(function () {
    Route::get("/login", [AuthController::class, "getLogin"])->name("login");
    Route::post("/login", [AuthController::class, "postLogin"])->name("post.login");   
    Route::get("/logout", [AuthController::class, "getLogout"])->name("logout"); 
});

Route::middleware('auth')->group(function () {
    route::get('/admin',[ShowController::class ,'getDataadmin'])->name("admin");

    Route::post('/portofolio',[PortofolioController::class, 'store']);
    Route::post('/sertifikat',[SertiController::class, 'storeserti1']);
    
    Route::get('/portofolio/{portofolio_id}/edit',[PortofolioController::class, 'edit']);
    Route::get('/serti/{serti_id}/edit',[SertiController::class, 'edit2']);
    Route::put('/portofolio/{portofolio_id}',[PortofolioController::class, 'update']);
    Route::put('/serti/{serti_id}',[SertiController::class, 'update']);
    Route::delete('/portofolio/{portofolio_id}',[PortofolioController::class, 'destroy']);
    Route::delete('/serti/{sertifikat_id}',[SertiController::class, 'destroy']);
});
