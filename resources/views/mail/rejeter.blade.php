<x-mail::message>
bonjours {{$demande->user->name}}
# ASSISTANCIA
vous informe que votre reclamation a ete rejetee
## *MOTIF:*
> {{$motif}}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
