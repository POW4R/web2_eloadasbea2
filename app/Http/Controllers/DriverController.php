<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::orderBy('id', 'asc')->get();
        return view('crud', compact('drivers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'sex'       => 'required',
            'birthDate' => 'required|date',
            'country'   => 'required'
        ]);

        Driver::create($request->all());
        return redirect()->back()->with('success', 'Driver created successfully.');
    }

    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name'      => 'required',
            'sex'       => 'required',
            'birthDate' => 'required|date',
            'country'   => 'required'
        ]);

        $driver->update($request->all());
        return redirect()->back()->with('success', 'Driver updated successfully.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->back()->with('success', 'Driver deleted successfully.');
    }
}
