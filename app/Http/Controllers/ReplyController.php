<?php

// app/Http/Controllers/ReplyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Message;

class ReplyController extends Controller
{
    public function store(Request $request, $messageId)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        Reply::create([
            'message_id' => $messageId,
            'admin_id' => auth()->id(),
            'reply' => $request->reply,
        ]);

        return redirect()->route('admin.messages.show', $messageId)->with('success', 'Reply sent successfully!');
    }

    public function show($messageId)
    {
        $message = Message::findOrFail($messageId);
        return view('admin.messages.show', compact('message'));
    }

    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }
}
