<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\GP;
use App\Models\Result;

class DatabaseController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        $gps = GP::all();
        $results = Result::with(['driver', 'gp'])->get();

        return view('database', compact('drivers', 'gps', 'results'));
    }
}
