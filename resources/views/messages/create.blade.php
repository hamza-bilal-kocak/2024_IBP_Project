@extends('layouts.user')

@section('content')
    <div class="container">
        <h1>Send a Message</h1>
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
