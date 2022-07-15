<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Flugg\Responder\Contracts\Responder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request, Responder $responder)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = ['user' => $user, 'access_token' => $token, 'token_type' => 'Bearer'];

        return $responder->success($response);
    }

    public function login(Request $request, Responder $responder)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'access_token' => $token,
            'token_type' => 'Bearer'
        ];

        return $responder->success($response);
    }

    public function logout(Request $request, Responder $responder)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        $respon = [
            'message' => 'Logout successfully',
        ];


        return $responder->success($respon);
    }

    public function logoutall(Request $request, Responder $responder)
    {
        $user = $request->user();
        $user->tokens()->delete();
        $respon = [
            'message' => 'Logout successfully',
        ];

        return $responder->success($respon);
    }
}
