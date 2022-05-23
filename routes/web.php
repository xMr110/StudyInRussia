<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', function () { return view('FrontEnd.index');});


Route::prefix('admin')->middleware(['auth','ActiveAccount'])->name('admin.')->group(function (){
    // admin index
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::middleware(['CheckRole:ADMIN'])->group(function () {

        //users
        Route::resource('users', UserController::class);
        Route::get(' users/load', [UserController::class,'load'])->name('users.load');
    });

});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
