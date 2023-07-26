<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name-admin' => 'required|string|max:100',
            'identity-card-admin' => 'required|string|max:15',
            'phoneNum-admin' => 'required|string|max:15',
            'email-admin' => 'required|email|max:225|unique:user,userEmail',
            'password-admin' => 'required|string|min:8',
            'education-level-admin' => 'required|string|max:45',
            'officeNum-admin' => 'required|string|max:10',
        ]);

        // Insert data into the 'user' table
        $userID = $request->input('email-admin');
        $userPass = bcrypt($request->input('password-admin'));
        $userName = $request->input('name-admin');
        $userNumber = $request->input('phoneNum-admin');
        $userEmail = $request->input('email-admin');
        $userCreateDate = now()->toDateString();
        $userStatus = 'Active';

        DB::table('user')->insert([
            'userID' => $userID,
            'userPass' => $userPass,
            'userName' => $userName,
            'userNumber' => $userNumber,
            'userEmail' => $userEmail,
            'userCreateDate' => $userCreateDate,
            'userStatus' => $userStatus,
        ]);

        // Insert data into the 'administrator' table
        $adminRoles = 'Super Admin'; // Assuming all administrators are Super Admins
        $officeNumber = $request->input('officeNum-admin');

        DB::table('administrator')->insert([
            'userID' => $userID,
            'adminRoles' => $adminRoles,
            'officeNumber' => $officeNumber,
        ]);

        return redirect()->route('admin.home')->with('success', 'Registration successful!'); // Redirect to the admin home page after registration
    }
}