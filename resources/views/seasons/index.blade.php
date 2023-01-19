<x-layout title="Séries">
    <a href="{{route('series.index')}}" class="btn mb-2" style="background-color: #88BABF">Voltar</a>
    <ul class="list-group">
        @foreach($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Temporada {{$season->number}}
                <span class="badge" style="background-color: #3C9BA6">
                    {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
