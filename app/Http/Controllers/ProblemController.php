<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;

class ProblemController extends Controller
{
    public function create()
    {
        return view('problem-upload');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'statement' => 'required|string',
            'input' => 'required|string',
            'output' => 'required|string',
        ]);

        $problem = Problem::create([
            'statement' => $data['statement'],
            'input' => $data['input'],
        'output' => $data['output'],
        ]);

        $testCases = [];

        for ($i = 1; $i <= 6; $i++) {
            $testCases['test_case' . $i] = $request->input('test_case' . $i);
        }
    
        $data = array_merge($data, $testCases);
    
        $problem = Problem::create($data);
       
        return redirect('/upload-problem')->with('success', 'Problem statement uploaded successfully!');
    }

public function getStatement()
{
    $problems = Problem::all(); 

    if ($problems) {
        return response()->json($problems, 200);
    } else {
        return response()->json(['message' => 'Problem statements not found'], 404);
    }
}

}
