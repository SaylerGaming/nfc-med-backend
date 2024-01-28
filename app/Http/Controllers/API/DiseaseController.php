<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Disease;

class DiseaseController extends Controller
{
    public function index(Request $request){
        return response(['diseases' => auth()->user()->diseases], 200);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $disease = Disease::create([
            'user_id' => auth()->id(),
            'name' => $fields['name']
        ]);
        return response(['disease' => $disease], 201);
    }

    public function delete($id){
        Disease::find($id)->delete();
        return response(['message' => 'Удалено'], 200);
    }

    public function update($id, Request $request){
        $fields = $request->validate([
            'name' => 'string|required'
        ]);
        $disease = Disease::find($id)->update($fields);
        return response([
            'message' => 'Обновлено'
        ], 200);
    }
}
