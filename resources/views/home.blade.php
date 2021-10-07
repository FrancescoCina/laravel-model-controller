@extends('layouts.main')

@section('title-page')
    <h1 class="text-center my-4">Movies</h1>



@endsection

@section('content')
<section id="movie-container  " class="">
@forelse ($movies as $movie)
<div class="card m-4 text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $movie['title'] }}   </h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie['original_title'] }}</h6>
      <p class="card-text">{{ $movie['nationality'] }}</p>
      <p>{{ $movie['date'] }}</p>
      <p>{{ $movie['vote'] }}</p>
    </div>
  </div>
    
@empty
<h1>Nessun Film trovato!!</h1>
    
@endforelse
</section>
@endsection