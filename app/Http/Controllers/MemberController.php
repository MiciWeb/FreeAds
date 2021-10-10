<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\sendStore;


class MemberController extends Controller
{
    public function showAction()
    {
        $users = DB::table("users")->get();
        return view("member")->with("users", $users);
    }

    public function sendAction(sendStore $request)
    {
        $id = auth()->user()->id;
        $validated = $request->validated();

        $add = new Message();
        $add->envoyeur = $id;
        $add->receveur = $validated["receveur"];
        $add->contenu = $validated["contenu"];
        $add->save();

        return redirect()->route("receive")->with("success", "Votre message a été envoyé !");
    }

    public function receiveAction()
    {
        $messages = DB::table("messages")->orderBy("created_at", "DESC")->get();
        return view("receive")->with("messages", $messages);
    }
}