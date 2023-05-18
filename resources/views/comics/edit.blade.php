@extends('layouts/main')
@section('content')
    <div class="container">
        {{-- aggiungere method e controllare tramite php artisan route:list il metodo necessario --}}
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- gli items del form devono necessariamente essere uguali a quelli salvati nella migration  e nel controller--}}
            <div>
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <input class="form-control" type="text" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input class="form-control" type="text" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="form-control" type="text" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div>
                <label for="sale_date">Data</label>
                <input class="form-control" type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input class="form-control" type="text" id="artists" name="artists" value="{{$comic->artists}}">
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input class="form-control" type="text" id="writers" name="writers" value="{{$comic->writers}}">
            </div>
            <button type="submit">CREA!</button>
        </form> 
    </div>
@endsection