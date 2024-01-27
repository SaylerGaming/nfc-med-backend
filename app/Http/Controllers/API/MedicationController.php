<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Medication;

class MedicationController extends Controller
{
    public function index(Request $request){
        return response(['medications' => auth()->user()->medications], 200);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $medication = Medication::create([
            'user_id' => auth()->id(),
            'name' => $fields['name']
        ]);
        return response(['medication' => $medication], 201);
    }

    public function delete($id){
        Medication::find($id)->delete();
        return response(['message' => 'Удалено'], 200);
    }

    public function update($id, Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $medication = Medication::find($id)->update($fields);
        return response([
            'message' => 'Обновлено'
        ], 200);
    }
}