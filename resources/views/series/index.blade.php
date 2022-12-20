<x-layout title="Séries">
    <a href="/series/criar" type="button" class="btn btn-outline-primary mb-3">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $key => $serie)
        <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>