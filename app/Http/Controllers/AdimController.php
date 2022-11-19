<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.show',compact('demande'));
    }
    public function show()
    {

        $lists=Demande::all()->where('user_admin_id', Auth::user()->id);
        return view('admin.tacheAdmin', compact('lists'));
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
    public function sendMailRefus(Request $request)
    {
        $demande=Demande::find($request->id);
        $demande->traitement=3;
        $demande->save();
        return redirect('show');
        // dd($demande->objet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
