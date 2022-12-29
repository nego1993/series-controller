<x-layout title="Cadastrar nova série">
    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="d-flex justify-content-between">
            <a href="/series" class="btn btn-outline-secondary">Voltar</a>
            <button type="submit" class="btn btn-outline-success">Enviar</button>
        </div>
    </form>
</x-layout>