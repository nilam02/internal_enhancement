<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable = ['statement', 'input', 'output', 'test_case1', 'test_case2', 'test_case3', 'test_case4', 'test_case5', 'test_case6']; 
}
