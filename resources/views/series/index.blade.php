<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach($series as $serie)
        <li>${{$serie}}</li>
        @endforeach
    </ul>
    {{-- <script>
        const series = {{Js::from($series)}}; //traz os valores do array series do php para a constante series do Js de maneira correta
    </script> --}}
</x-layout>
