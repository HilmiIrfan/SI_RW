<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function addUser(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:user',
            'password' => 'required|string|min:6|confirmed',
            'level_user' => 'required|integer',
            'role' => 'nullable|string|max:50'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create new user
        $user = UserModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level_user' => $request->level_user,
            'role' => $request->role
        ]);

        // Return success response
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }
}
