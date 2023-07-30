<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class StudentController extends Controller
{
    public function showRegistrationForm()
    {
        return view('student-sign-up');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'userName' => 'required|string|max:100',
            'userNumber' => 'required|string|max:15',
            'userEmail' => 'required|email|unique:user,userEmail',
            'password' => 'required|string|min:6',

            'guardianName' => 'required|string|max:100',
            'guardianNumber' => 'required|string|max:15',
            'studentAddress' => 'required|string|max:200',
        ]);

        // Create a new user
        $user = User::create([
            'userID' => uniqid(), // Generate a unique user ID
            'userName' => $request->userName,
            'userNumber' => $request->userNumber,
            'userEmail' => $request->userEmail,
            'password' => $request->password,
            
            'userCreateDate' => now(),
            'userStatus' => 'Active',
            'userType' => 'Student',
        ]);

        // Create a new student record
        $student = Student::create([
            'userID' => $user->userID,
            'guardianName' => $request->guardianName,
            'guardianNumber' => $request->guardianNumber,
            'studentAddress' => $request->studentAddress,
        ]);

        // Redirect to a success page or any other page as needed
        return redirect()->route('student.subscription')->with('success', 'Registration successful!');
    }
}
