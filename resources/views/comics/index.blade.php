@extends('layouts/main')
@section('content')
    <div class="container">
        @foreach ($comics as $singleComic)
        <div class="card" style="width: 18rem;">
            <img src="{{$singleComic->thumb}}" class="card-img-top" alt="fumetto">
            <div class="card-body">
              <h5 class="card-title">{{$singleComic->title}}</h5>
              <p class="card-text">{{$singleComic->description}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection