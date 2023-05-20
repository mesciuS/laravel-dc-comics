@extends('layouts/main')
@section('content')
    <div class="container">
        {{-- come primo metodo di validazione posso usare questo che mi da una lista in alto di tutti gli errori--}}

        {{-- @if ($errors->any())

                    queste sono classi di bootstrap

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        
        {{-- aggiungere method e controllare tramite php artisan route:list il metodo necessario --}}
        <form action="{{route('comics.store')}}" method="POST">
            {{-- usare sempre @csrf --}}
            @csrf
            {{-- gli items del form devono necessariamente essere uguali a quelli salvati nella migration  e nel controller--}}
            <div class="mb-3">
                <label for="title">Titolo</label>
                {{-- inserendo value con questa sintassi, l'input non verrà svuotato una volta che ci daarà errore --}}
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}"> 
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                {{-- form-control è una classe di bootstrap per la formattzzione, la sintassi di blade serve a far comparire l'errore direttamente sotto il campo di input --}}
                <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{old('description')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb">Immagine</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
                {{-- questa è la sintassi per controllare effettivamente se c'è un errore --}}
                @error('thumb')
                    {{-- bootstrap --}}
                    <div class="invalid-feedback">
                        {{-- {{$message}} è la sintassi necessaria che ci restituisce il testo dell'errore--}}
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price')}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
                @error('series')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date">Data</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
                @error('type')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="artists">Artisti</label>
                <input class="form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists" value="{{old('artists')}}">
                @error('artists')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="writers">Scrittori</label>
                <input class="form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers" value="{{old('writers')}}">
                @error('writers')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit">CREA!</button>
        </form> 
    </div>
@endsection