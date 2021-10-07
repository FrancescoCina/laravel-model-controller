@extends('layouts.main')

@section('title', 'Movies')

@section('title-page')
    
<h1 class="text-center my-4">Movies</h1>
@endsection

@section('content')
<section id="movie-container" class="d-flex justify-content-center">
    @forelse ($movies as $movie)
    <div class="card m-4 text-center" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $movie['title'] }}   </h5>
          <h6 class="card-subtitle mb-2 text-muted">Original Title: {{ $movie['original_title'] }}</h6>
          <p class="card-text">Nationality: {{ $movie['nationality'] }}</p>
          <p>	Release Date: {{ $movie['date'] }}</p>
          <p>Vote: {{ $movie['vote'] }}</p>
          <p class=""><a href="{{ route('movies.show', ['id'=> $movie['id']]) }}">Go to movie's details</a></p>
        </div>
      </div>
        
    @empty
    <h1>Nessun Film trovato!!</h1>
        
    @endforelse
    </section>
@endsection