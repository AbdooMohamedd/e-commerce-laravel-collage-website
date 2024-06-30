<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail; // Assuming UserDetail model exists

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $userDetail = new UserDetail();
        $userDetail->user_id = auth()->id(); // Assuming you're using Laravel's authentication and a user is logged in
        $userDetail->address = $request->input('address');
        $userDetail->gender = $request->input('gender');
        $userDetail->phone_number = $request->input('phone_number');
        $userDetail->birthdate = $request->input('birthdate');
        // Additional fields if any
        $userDetail->save();

        return redirect()->back()->with('success', 'Profile saved successfully!');
    }

    public function edit()
    {
        $userDetail = UserDetail::where('user_id', auth()->id())->first(); // Fetch user details for the authenticated user
        return view('edit-profile', compact('userDetail'));
    }

    public function update(Request $request, $id)
    {
        $userDetail = UserDetail::findOrFail($id);
        $userDetail->address = $request->input('address');
        $userDetail->gender = $request->input('gender');
        $userDetail->phone_number = $request->input('phone_number');
        $userDetail->birthdate = $request->input('birthdate');
        // Additional fields if any
        $userDetail->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
