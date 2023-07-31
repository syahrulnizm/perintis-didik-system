<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Administrator;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{

    public function showLoginForm()
    {
        return view('admin-sign-in');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'userEmail' => 'required|email',
            'password' => 'required',
        ]);

        $credentials['userType'] = 'Admin'; // Make sure it's a admin login only

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->withErrors(['userEmail' => 'Invalid credentials']);
    }

    // -------------------------------------------

    public function showRegistrationForm()
    {
        return view('admin-sign-up');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'userName' => 'required|string|max:100',
            'userNumber' => 'required|string|max:15',
            'userEmail' => 'required|email|unique:user,userEmail',
            'password' => 'required|string|min:6',

            'adminRoles' => 'required|string|max:45',
            'officeNumber' => 'required|string|max:10',
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
            'userType' => 'Admin',
        ]);

        // Create a new administrator record
        $administrator = Administrator::create([
            'userID' => $user->userID,
            'adminRoles' => $request->adminRoles,
            'officeNumber' => $request->officeNumber,
        ]);

        // Redirect to a success page or any other page as needed
        return redirect()->route('admin.home')->with('success', 'Registration successful!');
    }
}