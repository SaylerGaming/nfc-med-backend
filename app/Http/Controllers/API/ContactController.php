<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
        return response(['contacts' => auth()->user()->contacts], 200);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'string|required',
            'family_type' => 'string|required',
            'phone' => 'string|required',
        ]);
        $fields['user_id'] = auth()->id();
        $contact = Contact::create($fields);
        return response(['contact' => $contact], 201);
    }

    public function delete($id){
        Contact::find($id)->delete();
        return response(['message' => 'Удалено'], 200);
    }

    public function update($id, Request $request){
        $fields = $request->validate([
            'name' => 'string',
            'family_type' => 'string',
            'phone' => 'string',
        ]);
        $contact = Contact::find($id)->update($fields);
        return response([
            'message' => 'Обновлено'
        ], 200);
    }
}
