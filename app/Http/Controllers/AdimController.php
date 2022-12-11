<?php

namespace App\Http\Controllers;

use App\Mail\Rejeter;
use App\Mail\Traiter;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function voir($id)
    {
        $demande=Demande::find($id);

        return view('admin.show',compact('demande'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1(Request $request)
    {
        $demande=Demande::find($request->id);
        $demande->user_admin_id=Auth::user()->id;
        $demande->traitement=1;
        $demande->save();
        // return view('listAdmin');
        return redirect('listAdmin')->with('toast_success','vous etes charger de traitee cette reclamation');
    }
    public function show()
    {

        $lists=Demande::all()->where('user_admin_id', Auth::user()->id);
        $nbrAttente=Demande::all()->where('traitement', 1)->where('user_admin_id',Auth::user()->id)->count();
        $nbrTraitee=Demande::all()->where('traitement', 2)->where('user_admin_id',Auth::user()->id)->count();
        $nbrRejetee=Demande::all()->where('traitement', 3)->where('user_admin_id',Auth::user()->id)->count();
        // dd($nbrAttente);
        return view('admin.tacheAdmin', compact('lists','nbrAttente','nbrTraitee','nbrRejetee'));
        // dd($list);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rejeter($id)
    {
        $demandes=Demande::find($id);
        //  dd($demandes);
        return view('admin.refus',compact('demandes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMailRefus(Request $request, $id)
    {
        $demande=Demande::find($id);
        $demande->traitement=3;
        $demande->save();
        // dd($request->motif);
        Mail::to($demande->user)->send(new Rejeter($demande,$request->motif));
        return redirect('show')->with('success','reclamation rejeter avec success');
        // dd($demande->objet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valider($id)
    {
        $demande=Demande::find($id);
        $demande->traitement=2;
        $demande->save();
        Mail::to($demande->user)->send(new Traiter($demande));
        return redirect('show')->with('success','DEMANDE TRAITEE AVEC SUCCESS');;

    }
}
