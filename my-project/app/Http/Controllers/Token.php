<?php

namespace App\Http\Controllers;

use App\Models\Student;

class Token extends Controller
{
    public function index()
    {
        return response()->json(csrf_token());
    }


}
