@component('mail::message')
# Nouvelle reclamation - {{$demande->objet}}

une reclamation a ete faite

{{-- *Nom:* __{{$tache->nom}}__ --}}
{{-- *Description:* __{{$demande->description}}__ --}}

@component('mail::button', ['url' => url('voir/'.$demande->id)])
VOIR
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
