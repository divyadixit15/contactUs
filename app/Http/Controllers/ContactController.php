<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }

    public function listMessages(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'from' => 'nullable|date',
            'to' => 'nullable|date|after_or_equal:from',
        ]);

        $query = ContactMessage::query();

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->from);
        }

        if ($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->to);
        }

        $messages = $query->orderBy('created_at', 'desc')->paginate(10);
        $messages->appends($request->all());

        return view('admin.messages.index', compact('messages'));
      
    }

    public function show(Request $request)
    {
        $ContactMessage = ContactMessage::select('message')->where('id', $request->id0)->firstOrFail();

        return view('admin.messages.show', compact('ContactMessage'));
    }
}

