<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail; // 修正: クラス名を正しくしてインポート

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

        // 修正: ContactSendMail Mailableクラスを使用してメールを送信
        Mail::to($to)->send(new ContactSendMail($validated));

        return back()->with('success', 'お問い合わせありがとうございます。メッセージが送信されました。');
    }
}
