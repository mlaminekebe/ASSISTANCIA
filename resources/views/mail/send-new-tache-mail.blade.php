@component('mail::message')
{{-- # Nouvelle tache - {{$demande->nom}} --}}

{{-- Bonjour {{$demande->user->name}}, --}}
Une nouvelle tache a été créée, voici les détails :

{{-- *Nom:* __{{$tache->nom}}__ --}}
*Description:* __{{$demande->description}}__

{{-- @component('mail::button', ['url' => route('tache.show',compact('tache'))])
Afficher la tache
@endcomponent --}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
