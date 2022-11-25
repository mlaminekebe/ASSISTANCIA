<?php

namespace App\Console\Commands;

use App\Mail\SendMailRappelEnCours;
use App\Models\Demande;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailEncours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:encours';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command permettant denvoyer des mail de rappel pour tous les demande qui en cours de plus de 2 jours';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subday = Carbon::now()->subDays(2);
        $demandes = Demande::all()->where('updated_at' ,'<' ,$subday)->where('traitement' ,1);
        foreach ($demandes as $demande) {
            $this->info("nom: $demande->objet ");
             Mail::to(User::find($demande->user_admin_id))->send(new SendMailRappelEnCours($demande));

        }
    }
}
