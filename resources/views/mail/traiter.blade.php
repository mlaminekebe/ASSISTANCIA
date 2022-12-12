<x-mail::message>
bonjours {{$demande->user->name}}
#ASSISTANCIA
vous informe que votre reclamation {{$demande->objet}} a ete traitee avec success


MERCI,<br>
{{ config('app.name') }}
</x-mail::message>
