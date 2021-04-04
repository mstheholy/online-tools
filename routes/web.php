<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
Route::get("/tool/{any}", function($menu) {
  dd($menu);
})->where("any", ".*");
*/

Route::get("/", [HomeController::class, "index"]);
Route::get("/tools/{menu}/{item}", [HomeController::class, "loadTools"]);
Route::get("/tool/{item}", [HomeController::class, "loadTool"]);