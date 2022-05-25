<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Login\Logincontroller;
//======================Post routes ======================
//for home page
Route::get('/',[Postcontroller::class,'index'])->name('index');
//show the form
Route::get('/addpost',[Postcontroller::class,'showform']);
//add the form
Route::post('/addpost',[Postcontroller::class,'addpost']);
// =======================User routes===============
// user routes
Route::get('/login',[Logincontroller::class,'showLoginform'])->name('login');
Route::get('signup',[Logincontroller::class,'showSignupform'])->name('signup');