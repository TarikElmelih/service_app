<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Handle contact form submission
        // يمكن إضافة إرسال بريد إلكتروني أو حفظ في قاعدة البيانات

        return back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}
