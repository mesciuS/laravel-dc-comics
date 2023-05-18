@extends('layouts/main')
@section('content')
    <div class="container">
        {{-- aggiungere method e controllare tramite php artisan route:list il metodo necessario --}}
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            {{-- gli items del form devono necessariamente essere uguali a quelli salvati nella migration  e nel controller--}}
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <input type="text" id="description" name="description">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" id="thumb" name="thumb">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price">
            </div>
            <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series">
            </div>
            <div>
                <label for="sale_date">Data</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type">
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input type="text" id="artists" name="artists">
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input type="text" id="writers" name="writers">
            </div>
            <button type="submit">CREA!</button>
        </form> 
    </div>
@endsection