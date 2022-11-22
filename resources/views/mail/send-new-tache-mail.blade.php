@component('mail::message')
# Nouvelle reclamation - {{$demande->objet}}

une reclamation a ete faite

{{-- *Nom:* __{{$tache->nom}}__ --}}
{{-- *Description:* __{{$demande->description}}__ --}}

@component('mail::button', ['url' => route('listAdmin')])
VOIR
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
