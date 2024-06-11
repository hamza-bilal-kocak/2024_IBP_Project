@extends('layouts.user')

@section('title', 'Message Details')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $message->title }}</h1>
        <p>{{ $message->body }}</p>
        <a href="{{ route('messages.index') }}" class="mt-4 inline-block text-blue-500">Back to Messages</a>
    </div>
@endsection
