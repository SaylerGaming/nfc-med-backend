<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
    public function doctors() {
        $user = Auth()->user();
        $doctors = User::where('role', '>=', 1)->where('hospital_id', $user->hospital_id)
            ->orderBy('role', 'desc')->orderBy('name', 'asc')->get();
        
        return view('admin.doctors', compact('doctors'));
    }
}
