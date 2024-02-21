<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $to = 'yamatito0309@gmail.com';
        $subject = 'お問い合わせフォームからのメッセージ';
        $messageBody = "お名前: {$validated['name']}\nメールアドレス: {$validated['email']}\nお問い合わせ内容:\n{$validated['message']}";

        Mail::raw($messageBody, function ($message) use ($to, $subject, $validated) {
            $message->to($to)->subject($subject);
            $message->from($validated['email']);
        });

        return back()->with('success', 'お問い合わせありがとうございます。メッセージが送信されました。');
    }
}
