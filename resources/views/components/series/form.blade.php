    <form action="{{$action}}" method="post">
        @csrf

        @isset($name)
        @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" id="name" @isset($name)value="{{$name}}"@endisset>
        </div>
        <div class="d-flex justify-content-between">
            <a href="/series" class="btn btn-outline-secondary">Voltar</a>
            <button type="submit" class="btn btn-outline-success">Enviar</button>
        </div>
    </form>
