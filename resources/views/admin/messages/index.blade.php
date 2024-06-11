@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Messages</h1>
        <ul>
            @foreach($messages as $message)
                <li>
                    <a href="{{ route('admin.messages.show', $message->id) }}">{{ $message->subject }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
