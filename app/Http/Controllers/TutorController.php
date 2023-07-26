<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name-tutor' => 'required|string|max:100',
            'identity-card-tutor' => 'required|string|max:15',
            'phoneNum-tutor' => 'required|string|max:15',
            'email-tutor' => 'required|email|max:225|unique:user,userEmail',
            'password-tutor' => 'required|string|min:8',
            'education-level' => 'required|string|max:45',
            'working-experience' => 'required|string|max:45',
        ]);

        // Insert data into the 'user' table
        $userID = $request->input('email-tutor');
        $userPass = bcrypt($request->input('password-tutor'));
        $userName = $request->input('name-tutor');
        $userNumber = $request->input('phoneNum-tutor');
        $userEmail = $request->input('email-tutor');
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

        // Insert data into the 'tutor' table
        $educationLevel = $request->input('education-level');
        $workingExperience = $request->input('working-experience');

        DB::table('tutor')->insert([
            'userID' => $userID,
            'tutorName' => $userName, // Assuming tutorName is the same as userName
            'educationLevel' => $educationLevel,
            'workingExperience' => $workingExperience,
        ]);

        return redirect()->route('tutor.home')->with('success', 'Registration successful!'); // Redirect to the tutor home page after registration
    }
}