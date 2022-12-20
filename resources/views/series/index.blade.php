<x-layout title="Séries">
    <a href="/series/criar" type="button" class="btn btn-outline-light">Adicionar</a>
    <ul>
        @foreach ($series as $key => $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>