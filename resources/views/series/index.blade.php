<x-layout title="Séries">
    <a href="{{route('series.create')}}" type="button" class="btn btn-outline-primary mb-3">Adicionar</a>
    <ul class="list-group ">
        @foreach ($series as $key => $serie)
        <li class="list-group-item d-flex justify-content-between">{{$serie->name}}
        <span>
            <button class="btn btn-outline-primary"><i class="fa fa-pencil"></i>
</i> Editar</button>
            <button class="btn btn-outline-danger"><i class="fa fa-trash"></i>
</i> Excluir</button>
        </span>
        </li>
        @endforeach
    </ul>
</x-layout>