<x-layout  class="d-flex" title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <form method="post">
        @csrf
    <ul class="list-group col">
        @foreach($episodes as $episode)
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Episódio {{$episode->number}}
                <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" 
                @if ($episode->watched) checked @endif
                />
            </li>
        @endforeach
    </ul>
    <div class="col mt-3">
        @auth
        <button class="btn" style="background-color: #3C9BA6">Salvar</button>
        @endauth
        <a href="{{route('series.index')}}" class="btn" style="background-color: #88BABF">Voltar</a>
    </div>
</form>
</x-layout>