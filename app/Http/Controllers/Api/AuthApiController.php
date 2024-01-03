<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        }

        // Create a new user
        $user = new User([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // Add any other fields you want to save
        ]);

        // Save the user to the database
        $user->save();

        // Optionally, you can also log in the user after registration
        Auth::login($user);

        // Generate and return an access token
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['access_token' => $accessToken, 'message' => 'User registered successfully'], 200);
    }

    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 422);
        }

        // Attempt to authenticate
        if (Auth::attempt($validator->validated())) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response(['access_token' => $accessToken], 200);
        }

        // Authentication failed
        return response(['error' => 'Invalid credentials'], 401);
    }


    // Rest of the code...
}
