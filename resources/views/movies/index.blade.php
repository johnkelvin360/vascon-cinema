@extends('layouts.app')

@section('content')

        <div class="container mx-auto px-4 pt-14">
        <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Now Showing</h2>
        <div class="grid grid-cols-1 sm:grad-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16">
        @foreach ($popularMovies as $popularMovie)

          <x-movie-card :popularMovie="$popularMovie" :genres="$genres" />      
        @endforeach
         </div>
        </div>
    <div class="now-playing-movies py-24">
    <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Coming Soon</h2>
    <div class="grid grid-cols-1 sm:grad-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16">
               @foreach ($nowPlayingMovies as $popularMovie)

          <x-movie-card :popularMovie="$popularMovie" :genres="$genres" />      
        @endforeach
        </div>
</div>
</div>
        </div>

@endsection