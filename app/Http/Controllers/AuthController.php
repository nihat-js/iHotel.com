<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register()
  {

    $email = request()->input("email");
    $password = request()->input("password");
    $confirmPassword = request()->input("confirmPassword");

    return response()->json([
      "EMAIL" => $email
    ]);

  }
  public function login()
  {

  }
}
