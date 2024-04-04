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

    public function add(Request $request) {
        $user = Auth()->user();
        $doctor = User::where('name', $request->name)->where('surname', $request->surname)->first();
        if(!$doctor) return redirect()->back()->with('error', 'Пользователь с таким именем и фамилией не найден');
        elseif($doctor->role > 0) {
            if($doctor->hospital_id == $user->hospital_id) return redirect()->back()->with('error', 'Данный доктор уже являтеся вашим подопечным');
            return redirect()->back()->with('error', 'Данный пользователь уже являтеся доктором в другой клинике');
        }
        $doctor->update([
            'role' => 1,
            'hospital_id' => Auth()->user()->hospital_id
        ]);
        return redirect('/admin/doctor/'.$doctor->id);
    }

    public function delete($id) {
        $user = Auth()->user();
        $doctor = User::find($id);
        if(!$doctor) return redirect()->back()->with('error', 'Данного доктора не существует');
        elseif($doctor->hospital_id != $user->hospital_id) return redirect()->back()->with('error', 'Данный доктор не является вашим подопечным');
        elseif($doctor->role == 2) return redirect()->back()->with('error', 'Вы не можете убрать главврача с поста');
        $doctor->update([
            'role' => 0
        ]);
        return redirect('/admin/doctors')->with('success', $doctor->getFullname().' больше не ваш подчиненный');
    }
}
