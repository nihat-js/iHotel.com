<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
  public function register(Request $request)
  {
    $validated = $request->validate([
      "email" => "required",
      "password" => "required",
      "confirmPassword" => "required"
    ]);

    unset($validated["confirmPassword"]);
    $validated["password"] = Hash::make($validated["password"]);
    $validated["name"] = "";

    $user = User::create($validated);

    auth()->login($user);

    return redirect()->route('home')->with('success', 'Registration successfull');

    // return response()->json($validated, 201);

  }
  public function login()
  {

  }
}
