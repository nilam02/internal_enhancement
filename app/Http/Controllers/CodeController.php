<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;


class CodeController extends Controller
{
    public function runCode(Request $request)
    {
        $pythonExecutable = 'C:\Program Files\Python311\python.exe';
        $pythonCode = $request->input('code');
        $process = new Process([$pythonExecutable, '-c', $pythonCode]);
        $process->run();

        if (!$process->isSuccessful()) {
            return response($process->getErrorOutput(), 500);
        }
        return response($process->getOutput(), 200);
    }
}
