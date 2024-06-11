@extends('layouts.user')

@section('content')
    <div class="container">
        <h1>Your Messages</h1>
        <ul>
            @foreach($messages as $message)
                <li>
                    <a href="{{ route('messages.show', $message->id) }}">{{ $message->subject }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
