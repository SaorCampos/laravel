<x-layout class="d-flex" title="Editar Série '{!! $series->nome !!}'">
    <form action="" method="PUT">
        @csrf {{-- valida as informações enviadas pelo formulario --}}
        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$series->nome}}">
        </div>
        <div class="mb-3 col-6">
            <label for="seasonQty" class="form-label">Nº de Temporadas</label>
            <input type="text" name="seasonQty" id="seasonQty" class="form-control" >
        </div>
        <div class="mb-3 col-6">
            <label for="episodesPerSeason" class="form-label">Episodios por Temporada</label>
            <input type="text" name="episodesPerSeason" id="episodesPerSeason" class="form-control">
        </div>
        <button type="submit" class="btn" style="background-color: #3C9BA6">Editar</button>
        <a href="{{route('series.index')}}" class="btn" style="background-color: #88BABF">Voltar</a>
    </form>
</x-layout>