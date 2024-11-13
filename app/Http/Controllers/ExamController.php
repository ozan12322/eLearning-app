<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    function exam(){
        return view('edu.exam');
    }
}
