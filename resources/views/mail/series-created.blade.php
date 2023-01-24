@component('mail::message')
# {{ $nome }} criada
A série {{ $nome }} com {{ $seasonQty }} temporadas e {{ $episodesPerSeason }} episódios por temporada foi criada.

Acesse aqui:
@component('mail::button', ['url'=>route('seasons.index', $id)])
Ver Série
@endcomponent
@endcomponent