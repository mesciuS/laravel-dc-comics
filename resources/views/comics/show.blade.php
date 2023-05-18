@extends('layouts/main')
@section('content')
    <div class="container">
        <ul>
            <li>Descrizione: {{$comic->description}}</li>
            <li>Serie: {{$comic->series}}</li>
            <li>Data di rilascio: {{$comic->sale_date}}</li>
            <li>Tipo: {{$comic->type}}</li>
            <li>Artisti: {{$comic->artists}}</li>
            <li>Scrittori: {{$comic->writers}}</li>
        </ul>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red">CANCELLA!</button>
        </form>
    </div>
@endsection