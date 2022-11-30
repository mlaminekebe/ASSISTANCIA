<x-mail::message>
nous vous rappelons que cette reclamation a ete faite depuis plus de 2 jours

merci de le traiter si possible

## *OBJET:*
> {{$demande->objet}}

@component('mail::button', ['url' => url('voir/'.$demande->id)])
VOIR
@endcomponent
{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
