<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\GP;
use App\Models\Result;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        $driverCount  = Driver::count();
        $gpCount      = GP::count();
        $resultCount  = Result::count();
        $messageCount = Contact::count();

        return view('admin', compact('driverCount', 'gpCount', 'resultCount', 'messageCount'));
    }
}
