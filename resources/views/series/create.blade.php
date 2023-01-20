<x-layout class="d-flex" title="Nova Série">
    <form action="{{route('series.store')}}" method="post">
        @csrf {{-- valida as informações enviadas pelo formulario --}}
        <div class="mb-3">
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome</label>
                <input autofocus type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="seasonQty" class="form-label">Nº de Temporadas</label>
                <input type="text" name="seasonQty" id="seasonQty" class="form-control" value="{{old('seasonQty')}}">
            </div>
            <div class="mb-3 col-6">
                <label for="episodesPerSeason" class="form-label">Episiodios por Temporada</label>
                <input type="text" name="episodesPerSeason" id="episodesPerSeason" class="form-control" value="{{old('episodesPerSeason')}}">
            </div>
        </div>
        <button type="submit" class="btn" style="background-color: #3C9BA6">Adicionar</button>
        <a href="{{route('series.index')}}" class="btn" style="background-color: #88BABF">Voltar</a>
    </form>
</x-layout>