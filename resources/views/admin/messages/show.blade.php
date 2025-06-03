@extends('layouts.app')

@section('content')
    <h2>Message Details</h2>
    <p><strong>Message:</strong></p>
    <p>{{ $ContactMessage->message }}</p>

    <a href="{{ route('admin.messages.index') }}" style="color: #1e3a8a; text-decoration: underline;">Back to Messages</a>
@endsection
