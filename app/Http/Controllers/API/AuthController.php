<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
public function register(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    $token = $user->createToken('StockApp')->accessToken;

    return response()->json(['token' => $token], 200);
}

public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $user = User::where('email', $request->email)->first();

    if (!$user || !\Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Invalid email or password'], 401);
    }

    $token = $user->createToken('StockApp')->accessToken;

    return response()->json(['token' => $token], 200);
}


}
