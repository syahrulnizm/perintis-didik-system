<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;

class EducationlevelController extends Controller
{
    // Listing
    public function indexListEdulevel()
    {
        $educationLevels = EducationLevel::all();

        return view('admin/education-level', compact('educationLevels'));
    }

    // Create function
    public function create(Request $request)
    {
        $request->validate([
            'eduID' => 'required|string|max:10',
            'eduName' => 'required|string|max:45', 
        ]);

        // Create a new edu with the validated data
        $edulevel = new EducationLevel([
            'eduID' => $request->input('eduID'),
            'eduName' => $request->input('eduName'),
        ]);

        // Save the edu to the database
        $edulevel->save();

        // Redirect to the 'listedu' route after successful creation
        return redirect()->route('listedulevel')->with('success', 'edu created successfully!');
    }

    //update function
    public function update(Request $request, $eduID){
        $request->validate([
            'eduName' => 'required|string|max:45', 
        ]);

        $educationLevel = EducationLevel::find($eduID);

        if (!$educationLevel) {
            return redirect()->route('listedulevel')->with('error', 'Education level not found!');
        }

        // Update the education level with the validated data
        $educationLevel->eduName = $request->input('eduName');
        $educationLevel->save();

        // Redirect to the 'listedulevel' route after successful update
        return redirect()->route('listedulevel')->with('success', 'Education level updated successfully!');
    }

    // Delete function
    public function destroy($eduID) {
        // Find the education level by its ID
        $educationLevel = EducationLevel::find($eduID);

        if (!$educationLevel) {
            return redirect()->route('listedulevel')->with('error', 'Education level not found!');
        }

        // Delete the education level
        $educationLevel->delete();

        // Redirect to the 'listedulevel' route after successful deletion
        return redirect()->route('listedulevel')->with('success', 'Education level deleted successfully!');
    }



}