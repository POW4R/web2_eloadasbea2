<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Contact::orderBy('createdAt', 'desc')->get();
        return view('messages', compact('messages'));
    }
}
