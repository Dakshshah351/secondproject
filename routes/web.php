<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BaseController::class,'index']);
Route::get('/about/{name}/{lname}',[BaseController::class,'about']);
route::get('userinfo',[BaseController::class,'userInfo']);
route::post('userinfo',[BaseController::class,'userInfoCreate']);