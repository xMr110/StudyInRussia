<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', function () { return view('FrontEnd.index');});


Route::prefix('admin')->middleware(['auth','ActiveAccount','CheckRole:ADMIN'])->name('admin')->group(function (){

    // admin index
    Route::get('/',[AdminController::class,'index'])->name('index');


});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
