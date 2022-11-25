<?php

use App\Http\Controllers\Base2Controller;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BaseController::class,'index']);
Route::get('/about/{name}/{lname}',[BaseController::class,'about']);
route::get('userinfo',[BaseController::class,'userInfo']);
route::post('userinfo',[BaseController::class,'userInfoCreate']);
route::get('register',[registerController::class,'register']);
route::post('register',[registerController::class,'register_post']);