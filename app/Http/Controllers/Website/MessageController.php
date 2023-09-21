<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ClientMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('website.pages.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone_number' => 'required|max:15',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        $message = new ClientMessage();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone_number = $request->phone_number;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->ip = $request->ip();
        $message->save();

        return redirect()->back()->with('success', 'The Message submitter successfully');
    }
}
