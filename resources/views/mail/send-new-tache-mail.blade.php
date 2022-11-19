@component('mail::message')
# Nouvelle demande - {{$demande->objet}}

{{-- *Bonjour* {{User::find('name')}}, --}}
une reclamation a ete faite

{{-- *Nom:* __{{$tache->nom}}__ --}}
{{-- *Description:* __{{$demande->description}}__ --}}

{{-- @component('mail::button', ['url' => route('tache.show',compact('tache'))])
Afficher la tache
@endcomponent --}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
