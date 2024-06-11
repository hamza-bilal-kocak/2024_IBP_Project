{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Message: {{ $message->subject }}</h1>
        <p>{{ $message->message }}</p>

        <h2>Replies</h2>
        <ul>
            @foreach($message->replies as $reply)
                <li>{{ $reply->reply }} (by admin {{ $reply->admin->name }})</li>
            @endforeach
        </ul>

        <form action="{{ route('admin.messages.reply', $message->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="reply">Reply:</label>
                <textarea name="reply" id="reply" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Reply</button>
        </form>
    </div>
@endsection --}}
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Message: {{ $message->subject }}</h1>
        <p>{{ $message->message }}</p>

        <h2>Replies</h2>
        <ul>
            @foreach($message->replies as $reply)
                <li>{{ $reply->reply }} (by admin {{ $reply->admin->name }})</li>
            @endforeach
        </ul>

        <form action="{{ route('admin.messages.reply', $message->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="reply">Reply:</label>
                <textarea name="reply" id="reply" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Reply</button>
        </form>
    </div>
@endsection
