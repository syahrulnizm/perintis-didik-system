<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\Package;

class SubscriptionController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        $packages = Package::all();

        return view('student.subscription', compact('educationLevels', 'packages'));
    }
}