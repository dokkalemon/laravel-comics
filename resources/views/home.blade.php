@extends('layout.main')

@section('main')

<main class="full-width">
    <div class="comics-container container px-10">
        
        @foreach ($comics as $comic)
        <div class="card px-10">
            <div class="card-container">
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['series']}}</h4>
            </div>
        </div>
        @endforeach

        <button class="primary-button home_button">LOAD MORE</button>
        
        
    </div>
</main>

@endsection