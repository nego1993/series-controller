<x-layout title="{{__('messages.app_name')}}">
    <a href="{{route('series.create')}}" type="button" class="btn btn-outline-primary mb-3">Adicionar</a>
    @isset($message)
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @endisset

    @isset($messagesuccess)
    <div class="alert alert-success">
        {{$messagesuccess}}
    </div>
    @endisset
    
    <ul class="list-group ">
        @foreach ($series as $key => $serie)
        <li class="list-group-item d-flex justify-content-between">{{$serie->name}}
        <form action="{{ route('series.destroy', $serie->id) }}" method="post">
            <span>
                <a href="{{ route('series.edit', $serie->id)}}" class="btn btn-outline-primary"><i class="fa fa-pencil"></i>
            </i> Editar</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger"><i class="fa fa-trash"></i>
</i> Excluir</button>
        </span>
        </form>
        </li>
        @endforeach
    </ul>
</x-layout>