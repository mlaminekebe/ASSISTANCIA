<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;

class AssistanciaController extends Controller
{
    public function nombre(){
        $nbrAttente=Demande::where('traitement', 0)->count();
        $nbrEncours=Demande::where('traitement', 1)->count();
        $nbrTraitee=Demande::where('traitement', 2)->count();
        $nbrRejetee=Demande::where('traitement', 3)->count();

        $admins=User::all()->where('role',1);
        // $adminsEncours=Demande::
        return view('assistancia.index',compact('nbrAttente','nbrEncours','nbrTraitee','nbrRejetee','admins'));
    }

    public function allUsers(){
        $users=User::all()->where('role',0);
        return view('assistancia.user', compact('users'));
    }
}
