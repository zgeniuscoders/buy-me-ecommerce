<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login(Request $request): JsonResponse
    {

        if (!Auth::attempt($request->only(["email", "password"]))) {
            return response()->json([
                'status' => false,
                'message' => 'Email & password does not match our record.'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        return response()->json([
            'status' => true,
            'message' => 'succces',
            'user' => $user,
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }

    public function register(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validatedData->errors()
            ], 422);
        }


        $user = User::create([
            "name" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => true,
            'message' => 'succces',
            'user' => $user,
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }
}
