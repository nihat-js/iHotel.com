<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SystemAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});
Route::get("/home", function () {
  return view("home");
})->name("home");
Route::get("/dashboard", function () {
  return view("dashboard");
})->name("dashboard");

Route::get("/register", function () {
  return view("register");
});

Route::get("/login", function () {
  return view("login");
});


Route::get("/system/register", function () {
  return view("system/register");
});
Route::get("/system/login", function () {
  return view("system/login");
});
Route::get("/system/dashboard", function () {
  return view("system/dashboard");
});

Route::post("/system/register", [SystemAuthController::class, "register"]);
Route::post("/system/login", [SystemAuthController::class, "login"]);


Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);