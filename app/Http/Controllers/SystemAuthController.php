<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemAuthController extends Controller
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

    $systemUser = SystemUser::create($validated);
    Auth::guard("system")->login($systemUser);
    return redirect()->route("system.dashboard");

  }
  public function login(Request $request)
  {

    $systemUser = SystemUser::where("email", "=", "system2@gmail.com")->limit(1)->first();
    // dd($systemUser);
    Auth::guard("system")->login($systemUser);
    echo "my email is " . auth("system")->user()->email;
  }
}
