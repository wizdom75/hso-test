<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validData = $request->validate([
            'name'=>'required|max:100',
            'email'=>'required|email|unique:users',
            'password' =>'required'
        ]);

        $validData['password'] = Hash::make($request->password);

        $user = User::create($validData);

        $access_token = $user->createToken('auth_token')->accessToken;
        return response(['user'=>$user, 'access_token'=>$access_token]);
    }

    public function login(Request $request)
    {
        $validData = $request->validate([
            'email'=>'required|email',
            'password' =>'required'
        ]);

        if(!auth()->attempt($validData)){
            return response(['message', 'Invalid credentials']);
        }
        $access_token = auth()->user()->createToken('auth_token')->accessToken;
        return response(['user'=>auth()->user(), 'access_token'=>$access_token]);
    }
}
