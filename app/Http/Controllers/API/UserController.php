<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function getInfo(Request $request){
        $user = auth()->user();

        $user->medications;
        $user->allergies;
        $user->contacts;
        $user->diseases;

        return response([
            'user' => $user
        ], 200);
    }

    public function update(Request $request){
        $fields = $request->validate([
            'name' => 'string',
            'surname' => 'string|nullable',
            'phone' => 'string|nullable',
            'iin' => 'string|nullable',
            'hospital' => 'string|nullable',
        ]);

        auth()->user()->update($fields);
        $response = [
            'new_fields' => $fields,
            'user' => auth()->user(),
        ];
        return response($response, 200);
    }
}