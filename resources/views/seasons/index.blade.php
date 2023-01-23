<x-layout title="Temporadas de {!! $series->nome !!}">
    <a href="{{route('series.index')}}" class="btn mb-2" style="background-color: #88BABF">Voltar</a>
    <ul class="list-group">
        @foreach($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                @auth
                <a href="{{route('episodes.index', $season->id)}}" class="text-reset text-decoration-none">
                @endauth
                    Temporada {{$season->number}}
                @auth
                    </a>
                @endauth 
                <span class="badge" style="background-color: #3C9BA6">
                    {{ $season->numberOfWatchedEpisodes()}} / {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>