<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
      $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
            'subject' => 'required|string'
        ]);

        Mail::to('admin@niranjanpandey.tech')->queue(new ContactUsMail($request->all()));
        return back();
    }
}
