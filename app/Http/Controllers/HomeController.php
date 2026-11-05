<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Raghad";

        $skills = ["PHP", "Laravel", "JavaScript"];

        $student = (object) [
            "id" => 1,
            "name" => "Raghad",
            "major" => "Computer Science"
        ];

        return view('welcome', compact('name', 'skills', 'student'));
    }
}