<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    public function doctors() {
        $doctors = User::where('role', 1)->get();

        return view('admin.doctors', compact('doctors'));
    }
}
