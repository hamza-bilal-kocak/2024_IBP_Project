<?php

// app/Http/Controllers/MessageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
    }

    public function index()
    {
        $messages = Message::where('user_id', auth()->id())->get();
        return view('messages.index', compact('messages'));
    }
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));
    }
}

