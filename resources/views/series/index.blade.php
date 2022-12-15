<x-layout title="Séries">
    <ul>
        @foreach ($series as $key => $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>