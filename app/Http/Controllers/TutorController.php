<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{

    public function showLoginForm()
    {
        return view('tutor-sign-in');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'userEmail' => 'required|email',
            'password' => 'required',
        ]);

        $credentials['userType'] = 'Tutor'; // Make sure it's a tutor login only

        if (Auth::attempt($credentials)) {
            return redirect()->route('tutor.home');
        }

        return redirect()->back()->withErrors(['userEmail' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('tutor-sign-up');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'userName' => 'required|string|max:100',
            'userNumber' => 'required|string|max:15',
            'userEmail' => 'required|email|unique:user,userEmail',
            'password' => 'required|string|min:6',

            'educationLevel' => 'required|string|max:45',
            'workingExperience' => 'required|string',
        ]);

        // Create a new user
        $user = User::create([
            'userID' => uniqid(), // Generate a unique user ID
            'userName' => $request->userName,
            'userNumber' => $request->userNumber,
            'userEmail' => $request->userEmail,
            'password' => bcrypt($request->password),
            
            'userCreateDate' => now(),
            'userStatus' => 'Active',
            'userType' => 'Tutor',
        ]);

        // Create a new tutor record
        $tutor = Tutor::create([
            'userID' => $user->userID,
            'educationLevel' => $request->educationLevel,
            'workingExperience' => $request->workingExperience,
        ]);

        // Redirect to a success page or any other page as needed
        return redirect()->route('tutor.home')->with('success', 'Registration successful!');
    }
}