@extends('layouts/main')
@section('content')
    <div class="container">
        @foreach ($comics as $singleComic)
        <div class="card" style="width: 18rem;">
            <img src="{{$singleComic->thumb}}" class="card-img-top" alt="fumetto">
            <div class="card-body">
              <h5 class="card-title">{{$singleComic->title}}</h5>
              <p class="card-text">{{$singleComic->price}}</p>
              {{-- alla route devo aggiungere l'id altrimenti non va da nessuna parte --}}
              <a href="{{route('comics.show', $singleComic->id)}}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
        <section>
            <a href="{{route('comics.create')}}" class="btn btn-primary">Crea un fumetto?</a>
        </section>
    </div>
@endsection