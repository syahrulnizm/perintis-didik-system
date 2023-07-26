<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class StudentController extends Controller
{
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name-student' => 'required|string|max:100',
            'identity-card-student' => 'required|string|max:15',
            'phoneNum-student' => 'required|string|max:15',
            'email-student' => 'required|email|max:225|unique:user,userEmail',
            'password-student' => 'required|string|min:8',
            'name-parent' => 'required|string|max:100',
            'identity-card-parent' => 'required|string|max:15',
            'phoneNum-parent' => 'required|string|max:15',
            'address' => 'required|string|max:200',
        ]);

        // Insert data into the 'user' table
        $userID = $request->input('email-student');
        $userPass = bcrypt($request->input('password-student'));
        $userName = $request->input('name-student');
        $userNumber = $request->input('phoneNum-student');
        $userEmail = $request->input('email-student');
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

        // Insert data into the 'student' table
        $guardianName = $request->input('name-parent');
        $studentAddress = $request->input('address');
        $guardianNumber = $request->input('phoneNum-parent');

        DB::table('student')->insert([
            'userID' => $userID,
            'guardianName' => $guardianName,
            'studentAddress' => $studentAddress,
            'guardianNumber' => $guardianNumber,
        ]);

        return redirect()->route('student.home')->with('success', 'Registration successful!'); // Redirect to the student home page after registration
    }
}