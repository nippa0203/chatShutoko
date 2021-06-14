<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        //新着順にメッセージ一覧を取得
        return \App\Message::orderBy('id', 'desc')->get();
    }

    public function create(Request $request)
    {
        $message = \App\Message::create([
            'body' => $request->message
        ]);

        event(new MessageCreated($message));
        // メッセージを登録
        // \App\Message::create([
        //     'body' => $request->message
        // ]);
    }
}
