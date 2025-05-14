<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    public function index()
    {
        $testresults = TestResult::all();
        return view('TestResult.ManageTestRes', compact('testresults'));
    }

    public function create()
    {
        return view('TestResult.CreateTestRes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'study_program' => 'required|string|max:255',
            'enrollment_path' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        TestResult::create($request->all());

        return view('TestResult.ManageTestRes')->with('success', 'Test result created successfully.');
        
    }
}
