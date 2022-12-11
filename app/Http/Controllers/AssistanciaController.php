<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AssistanciaController extends Controller
{
    //permet de retourner le nombre total de traitement dans les toutes les status et tous les administrateur
    public function nombre(){
        $nbrAttente=Demande::where('traitement', 0)->count();
        $nbrEncours=Demande::where('traitement', 1)->count();
        $nbrTraitee=Demande::where('traitement', 2)->count();
        $nbrRejetee=Demande::where('traitement', 3)->count();
        $admins=User::all()->where('role',1);
        return view('assistancia.index',compact('nbrAttente','nbrEncours','nbrTraitee','nbrRejetee','admins'));
    }

    //permet de retourner tous les utilisateurs dans le tableau de bord
    public function allUsers(){
        $users=User::all()->where('role',0);
        return view('assistancia.user', compact('users'));
    }


    //permet de recuperer le nombre total de demande traiter par un administrateur
    public function infoUser($id){
        $nbrtraitement=Demande::where('user_admin_id', $id)->count();
        $admin=User::find($id);
        dd($nbrtraitement);
        return view('assistancia.infoUser',compact('nbrtraitement','admin'));
    }

    public function faireAdmis($id){
        $users=User::find($id);
        $users->role=1;
        $users->save();
        return redirect('/users')->with('success','UTLISATEUR DEFINI COMME ADMINISTRATEUR REUSSI');
    }
}
