<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Allergy;

class AllergyController extends Controller
{
    public function index(Request $request){
        return response(['allergies' => auth()->user()->allergies], 200);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $allergy = Allergy::create([
            'user_id' => auth()->id(),
            'name' => $fields['name']
        ]);
        return response(['allergy' => $allergy], 201);
    }

    public function delete($id){
        Allergy::find($id)->delete();
        return response(['message' => 'Удалено'], 200);
    }

    public function update($id, Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $allergy = Allergy::find($id)->update($fields);
        return response([
            'message' => 'Обновлено'
        ], 200);
    }
}
