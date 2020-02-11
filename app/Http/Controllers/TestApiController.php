<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\teachers;

class TestApiController extends Controller
{
    public function test()
    {
        return Student::paginate(10);
        //return Teachers::all();
    }
}
