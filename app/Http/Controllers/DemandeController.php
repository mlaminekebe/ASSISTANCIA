<?php

namespace App\Http\Controllers;

use App\Mail\SendNewTacheMail;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Demande::all()->where('traitement',0);
        return view ('admin.list',compact('lists'));

    }

    //voire toute les taches de l'utilisateur connecter
    public function index2()
    {
        $demandes = Demande::all()->where('user_id',Auth::user()->id)->where('role',0);
        return view ('demande.formulaire',compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validation du formulaire
        $request->validate([
            'description'=>'required',
            'objet'=>'required',
        ]);
        // instanciation de tache à partir du formulaire
        $demande = new Demande($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur
        $demande->user_id =  $request->user()->id;
        // dd($demande->user->email);
        $demande->saveOrFail();
        Mail::to(User::all()->where('role',1))->send(new SendNewTacheMail($demande));
        return redirect('form/')->with('toast_success',"reclamation envoyee avec success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        return view('demande.show',compact('demande'));
    }


}
