@extends('layouts.app')

@php use Illuminate\Support\Str; @endphp

@section('content')
    <h2>Contact Messages</h2>

    <form method="GET" class="filter-form" style="margin-bottom: 20px;">
        <input type="text" name="email" placeholder="Filter by Email" value="{{ request('email') }}" />
        <input type="date" name="from" value="{{ request('from') }}" />
        <input type="date" name="to" value="{{ request('to') }}" />
        <button type="submit">Filter</button>
    </form>

    <table class="messages-table" aria-label="Contact messages table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Submitted At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td>{{ Str::limit($msg->message, 50) }}</td>
                    <td>{{ $msg->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="#" id="showMessage" data-id='{{ $msg->id}}' class="view-link">View</a>
                        <div id="full-message-{{ $msg->id }}" style="display:none;">
                            <strong>Message:</strong><br>
                            {{ nl2br(e($msg->message)) }}
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center;">No messages found.</td>
                </tr>
            @endforelse
            <div id="messageDisplay" style="margin-top:20px; padding:15px; border:1px solid #ccc; border-radius:5px; background:#f9f9f9; display:none;"></div>

        </tbody>
    </table>

    <div class="pagination-wrapper" style="margin-top: 15px;">
        {{ $messages->links() }}
    </div>

    <style>
        /* Filter form inputs */
        .filter-form input[type="text"],
        .filter-form input[type="date"] {
            padding: 6px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .filter-form button {
            padding: 6px 12px;
            background-color: #1e3a8a;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .filter-form button:hover {
            background-color: #163a7c;
        }

        /* Table styling */
        .messages-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        .messages-table thead {
            background-color: #f0f0f0;
        }
        .messages-table th, .messages-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: middle;
        }
        .messages-table tbody tr:hover {
            background-color: #fafafa;
        }

        /* View link styling */
        .view-link {
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 600;
        }
        .view-link:hover {
            text-decoration: underline;
        }
    </style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var messageDisplay = document.getElementById('messageDisplay');
    
        document.querySelectorAll('.view-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var id = this.dataset.id;
                if (!id) return;
    
                var fullMessageDiv = document.getElementById('full-message-' + id);
                if (!fullMessageDiv) return;
    
                messageDisplay.innerHTML = fullMessageDiv.innerHTML;
                messageDisplay.style.display = 'block';
    
                messageDisplay.scrollIntoView({ behavior: 'smooth' });
            });
        });
    });
    </script>
    
@endsection
