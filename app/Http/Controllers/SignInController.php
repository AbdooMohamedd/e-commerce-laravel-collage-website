<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    // Method to show the profile
    public function showProfile()
    {
        // Retrieve authenticated user
        $user = Auth::user();

        return view('templates.sign-in', compact('user'));
    }

    public function showSignInForm()
    {
        // Retrieve authenticated user
        $user = Auth::user();

        // Check if user is authenticated
        if ($user) {
            // Retrieve user details for the authenticated user
            $userDetail = $user->userDetail;

            // If user details exist, show the form with existing data
            if ($userDetail) {
                return view('templates.sign-in', compact('userDetail'));
            }
        }

        // If user is not authenticated or user details don't exist, show the form without existing data
        return view('templates.sign-in');
    }


    // Method to process sign-in
    public function signIn(Request $request)
    {
        // Retrieve authenticated user
        $user = Auth::user();

        // Retrieve user details for the authenticated user
        $userDetail = $user->userDetail;

        // If user details exist, update them
        if ($userDetail) {
            $userDetail->update([
                'full_name' => $request->input('full_name'),
                'e_mail' => $request->input('e_mail'),
                'address' => $request->input('address'),
                'gender' => $request->input('gender'),
                'phone_number' => $request->input('phone_number'),
                'birthdate' => $request->input('birthdate'),
            ]);
        } else {
            // If user details don't exist, create new user details
            $userDetail = new UserDetail([
                'full_name' => $request->input('full_name'),
                'e_mail' => $request->input('e_mail'),
                'address' => $request->input('address'),
                'gender' => $request->input('gender'),
                'phone_number' => $request->input('phone_number'),
                'birthdate' => $request->input('birthdate'),
            ]);
            $user->userDetail()->save($userDetail);
        }

        // Redirect back to the sign-in form
        return redirect()->route('show.signin');
    }
}
