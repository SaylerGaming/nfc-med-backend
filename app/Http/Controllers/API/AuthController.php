<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('ilovecoding')->plainTextToken;

        $response = [
            'message' => 'Добро пожаловать на сайт',
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){

        auth()->user()->tokens()->delete();
        
        $response = [
            'message' => 'Вы вышли'
        ];

        return response($response, 200);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();
        $response = [];
        $status = 200;
        if(!$user) {
            $response = [
                'message' => 'Пользователя с такой почтой не существует'
            ];
            $status = 401;
        } else if(!Hash::check($fields['password'], $user->password)) {
            $response = [
                'message' => 'Неверный пароль'
            ];
            $status = 401;
        } else {
            $token = $user->createToken('ilovecoding')->plainTextToken;

            $response = [
                'message' => 'Добро пожаловать на сайт',
                'user' => $user,
                'token' => $token
            ];
        }
        return response($response, $status);
    }
}
