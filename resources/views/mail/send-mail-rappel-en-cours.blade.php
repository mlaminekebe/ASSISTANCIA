<x-mail::message>
nous vous rappelons que cette reclamation est en cours depuis plus de 2 jours

merci de finaliser le traiter le plus rapidement possible

## *OBJET:*
> {{$demande->objet}}

{{-- @component('mail::button', ['url' => route('show.show')])
VOIR
@endcomponent --}}
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
