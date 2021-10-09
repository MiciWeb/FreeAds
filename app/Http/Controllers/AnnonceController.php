<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addStore;
use App\Models\Annonce;
use Illuminate\Support\Facades\DB;


class AnnonceController extends Controller
{
    public function createAction(){
        return view('add');
    }
    public function storeAction(addStore $request){
        $validated = $request->validated();
        $add = new Annonce();
        $add->titre = $validated["titre"];
        $add->description = $validated["description"];
        $add->prix = $validated["prix"];
        $add->photographie = $validated["image"];
        $add->save();
        return redirect()->route("liste")->with("success", "Votre annonce a été deposé !");
    }

    public function listeAction(){
        $add = DB::table("annonces")->orderBy("created_at","DESC")->paginate(5);
        return view("liste")->with("add", $add);


    }
}
