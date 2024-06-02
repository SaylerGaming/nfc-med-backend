<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Storage;
use Session;

use App\Models\{
    User,
    Disease,
    Allergy,
    Medication,
    Contact,
    Hospital
};

class ProfileController extends Controller
{
    public function index() {
        $user = Auth()->user();
        if($user) return redirect('/profile/show/'.$user->email.'/'.$user->slug);
        return redirect('/auth');
    }

    public function edit() {
        $user = User::with('allergies', 'medications', 'diseases', 'contacts', 'hospital')->find(Auth()->id());
        $blood_types = [
            'первая положительная [O(I) Rh+]',
            'первая отрицательная [O(I) Rh-]',
            'вторая положительная [A(II) Rh+]',
            'вторая отрицательная [A(II) Rh-]',
            'третья положительная [B (III) Rh+]',
            'третья отрицательная [B (III) Rh-]',
            'четвёртая положительная [AB (IV) Rh+]',
            'четвёртая отрицательная [AB (IV) Rh-]'
        ];
        $hospitals = Hospital::all();
        return view('profile.edit', compact('user', 'blood_types', 'hospitals'));
    }

    public function update(Request $request) {
        $user = Auth()->user();
        $validated = $request->validate([
            // 'avatar' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'phone' => 'nullable|string',
            'blood_type' => 'nullable|string',
            'iin' => 'nullable|string',
        ]);

        // if($validated['avatar']){
        //     if($user->avatar) {
        //         $oldAvatar = 'users/'.explode('/', $user->avatar)[3];
        //         Storage::disk('public')->delete($oldAvatar);
        //     }
        //     $imagePath = $request->file('avatar')->store('users', 'public');
        //     $validated['avatar'] = '/storage/'.$imagePath;
        // }

        $user->update($validated);
           
        return redirect('/profile/edit');
    }

    public function updateBlood(Request $request) {
        $user = Auth()->user();
        $validated = $request->validate([
            'blood_type' => 'required|string'
        ]);

        $user->update($validated);
           
        return redirect('/profile/edit');
    }

    public function updateHospital(Request $request) {
        $user = Auth()->user();
        
        $hospital_id = $request->hospital_id != 0 ? $request->hospital_id : null;
        
        $user->update([
            'hospital_id' => $hospital_id
        ]);
           
        return redirect('/profile/edit');
    }

    public function show($email, $slug) {
        $user = User::with('allergies', 'medications', 'diseases', 'contacts', 'hospital')->where('email', $email)->where('slug', $slug)->first();
        if(!$user) return redirect('/');
        Session::flash('user', $user);
        return redirect('/profile/show'); 
    }

    public function display(Request $request) {
        $request->session()->reflash();
        $user = session('user');
        if(!$user) return redirect('/');
        
        return view('profile.user', compact('user'));
    }

    public function addDisease(Request $request) {
        Disease::create([
            'user_id' => Auth()->id(),
            'name' => $request->disease_name
        ]);
        return redirect()->back();
    }

    public function addAllergy(Request $request) {
        Allergy::create([
            'user_id' => Auth()->id(),
            'name' => $request->allergy_name
        ]);
        return redirect()->back();
    }

    public function addMedication(Request $request) {
        Medication::create([
            'user_id' => Auth()->id(),
            'name' => $request->medication_name
        ]);
        return redirect()->back();
    }

    public function addContact(Request $request) {
        Contact::create([
            'user_id' => Auth()->id(),
            'phone' => $request->contact_phone,
            'name' => $request->contact_name,
            'family_type' => $request->contact_family_type
        ]);
        return redirect()->back();
    }

    public function deleteDisease($id) {
        $disease = Disease::find($id);
        if($disease->user_id == Auth()->id()) {
            $disease->delete();
        }
        return redirect('/profile/edit');
    }
    public function deleteAllergy($id) {
        $allergy = Allergy::find($id);
        if($allergy->user_id == Auth()->id()) {
            $allergy->delete();
        }
        return redirect('/profile/edit');
    }

    public function deleteMedication($id) {
        $medication = Medication::find($id);
        if($medication->user_id == Auth()->id()) {
            $medication->delete();
        }
        return redirect('/profile/edit');
    }
}
