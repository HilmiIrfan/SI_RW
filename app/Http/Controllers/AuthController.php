<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:50|unique:user',
            'password' => 'required|string|min:6|confirmed',
            'level_user' => 'required|integer',
            'role' => 'nullable|string|max:50'
        ]);

        $user = UserModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level_user' => $request->level_user,
            'role' => $request->role
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (!$token = Auth::guard('api')->attempt($credentials)) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Retrieve the authenticated user
    $user = Auth::guard('api')->user();

    // Check the user's level and customize the response accordingly
    switch ($user->level_user) {
        case 1:
            return redirect()->route('admin.dashboard'); // Mengarahkan admin ke dashboard admin
            break;
        case 2:
            return redirect()->route('rw.dashboard');
            break;
        case 3:
            return redirect()->route('rt.dashboard');
            break;
        default:
            return redirect()->route('warga.dashboard');
    }
}

public function logout()
{

    return redirect()->route('login'); // Redirect ke halaman login setelah logout
}


    public function me()
    {
        return response()->json(Auth::guard('api')->user());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory()->getTTL() * 60 // Corrected line
        ]);
    }
    public function cek_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }
    
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level_user == '1') {
                return response()->json(['message' => 'Admin authenticated'], 200);
            } elseif ($user->level_user == '2') {
                return response()->json(['message' => 'Manager authenticated'], 200);
            } else {
                return response()->json(['message' => 'User authenticated'], 200);
            }
        } else {
            // Jika tidak ada pengguna yang cocok dengan kredensial yang diberikan
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}
