<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\{
    User,
    Hospital   
};

class AdminController extends Controller
{
    public function doctors() {
        $user = Auth()->user();
        $doctors = User::where('role', '>=', 1)->where('hospital_id', $user->hospital_id)
            ->orderBy('role', 'desc')->orderBy('name', 'asc')->get();
        
        return view('admin.doctors', compact('doctors'));
    }

    public function doctor($id) {
        $doctor = User::with('hospital')->findOrFail($id);
        $table = [];
        array_push($table, ['Должность', $doctor->getRoleName()]);
        array_push($table, ['Почта', $doctor->email]);
        array_push($table, ['Телефон', $doctor->phone]);
        array_push($table, ['ИИН', $doctor->iin]);
        array_push($table, ['Больница', $doctor->hospital->name]);
        array_push($table, ['Был принят на работу', $doctor->created_at->diffForHumans()]);
        $doctor->table = $table;
        return view('admin.doctor', compact('doctor'));
    }
}
