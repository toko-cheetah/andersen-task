<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function index(): View
    {
        $content = DB::table('users')
                        ->join('messages', 'users.id', '=', 'messages.user_id')
                        ->select('users.*', 'messages.text as message')
                        ->get();

        return view('welcome', ['content' => $content]);
    }

    public function store(StoreContentRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        Message::create([
            'user_id' => $user->id,
            'text' => $request->message
        ]);

        return redirect()->route('home');
    }
}
