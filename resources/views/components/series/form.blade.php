    <form action="{{$action}}" method="post">
        @csrf {{-- valida as informações enviadas pelo formulario --}}
        @isset($nome)
            @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" @isset($nome) value="{{$nome}}"@endisset>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{route('series.index')}}" class="btn btn-secondary">Voltar</a>
    </form>