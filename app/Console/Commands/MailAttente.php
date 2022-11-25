<?php

namespace App\Console\Commands;

use App\Mail\SendMailRappelEnAttente;
use App\Models\Demande;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailAttente extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:attente';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command permettant denvoyer des mail de rappel pour tous les demande qui en attente de plus de 2 jours';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subday = Carbon::now()->subDays(2);
        $demandes = Demande::all()->where('created_at' ,'<' ,$subday)->where('traitement' ,0);
        foreach ($demandes as $demande) {
            $this->info("nom: $demande->objet ");
             Mail::to(User::all()->where('role',1))->send(new SendMailRappelEnAttente($demande));

        }
    }
}
