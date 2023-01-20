<x-layout title="Séries">
    <a href="{{route('series.create')}}" class="btn mb-2" style="background-color: #3C9BA6">Adicionar</a>
    @isset($mensagemSucesso) 
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-decoration-none text-reset" href="{{ route('seasons.index', $serie->id)}}">
                    {{$serie->nome}}
                </a>
            <span class="d-flex">
                <a href="{{route('series.edit',$serie->id)}}" class="btn btn-warning btn-sm">E</a>
                <form action="{{route('series.destroy', $serie->id)}}" method="POST" class="ms-1">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </span>
            </li>
        @endforeach
    </ul>
    {{-- <script>
        const series = {{Js::from($series)}}; //traz os valores do array series do php para a constante series do Js de maneira correta
    </script> --}}
</x-layout>
