<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MyProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $header = 'My Projects'; // Define the header here
        return view('myprojects', compact('projects', 'header'));
    }
}
