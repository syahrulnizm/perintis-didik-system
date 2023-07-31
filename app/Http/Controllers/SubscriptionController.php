<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\Package;
use App\Models\Student;

class SubscriptionController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        $packages = Package::all();

        return view('student.subscription', compact('educationLevels', 'packages'));
    }

    public function adminView(){
        $studentInfo = Student::all();
        return view('admin.subscription', compact('studentInfo'));
    }
}