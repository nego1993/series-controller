    <form action="{{$action}}" method="post">
        @csrf

        @if($update)
        @method('PUT')
        @endif

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus name="name" class="form-control" id="name" @isset($name)value="{{$name}}"@endisset>
            </div>

            <div class="col-2">
                <label for="seasonsqty" class="form-label">N° de Temporadas</label>
                <input type="text" name="seasonsqty" class="form-control" id="seasonsqty" @isset($seasonsqty)value="{{$seasonsqty}}"@endisset>
            </div>

            <div class="col-2">
                <label for="qtyepisodes" class="form-label">Episódios</label>
                <input type="text" name="qtyepisodes" class="form-control" id="qtyepisodes" @isset($qtyepisodes)value="{{$qtyepisodes}}"@endisset>
            </div>

        </div>

            <div class="d-flex justify-content-between">
                <a href="/series" class="btn btn-outline-secondary">Voltar</a>
                <button type="submit" class="btn btn-outline-success">Enviar</button>
            </div>



    </form>