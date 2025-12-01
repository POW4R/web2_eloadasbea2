<?php

namespace App\Http\Controllers;

use App\Models\GP;
use App\Models\Result;

class ChartController extends Controller
{
    public function index()
    {
        // Lekérjük az összes GP-t időrendben
        $gps = GP::orderBy('date', 'asc')->get(['date', 'name']);

        // Eredmények lekérése (driver pozíciók)
        $results = Result::orderBy('gpDate', 'asc')->get(['driverId', 'gpDate', 'position']);

        return view('chart', [
            'gps' => $gps,
            'results' => $results,
        ]);
    }
}
