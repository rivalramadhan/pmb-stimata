<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    public function index()    
    {
        $testResults = TestResult::all();
        return view('TestResult.ManageTestResult');
    }

    public function create()
    {
        return view('TestResult.CreateTestResult');
    }

    public function store(Request $request)
    {
        
    }
}
