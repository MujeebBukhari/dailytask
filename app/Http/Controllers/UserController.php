<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function jobs()
    {
        $job = Job::all();
        return view('home', compact('job'));
    }
}
