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
    </div>
@endsection