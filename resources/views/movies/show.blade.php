@extends('layouts.app')

@section('content')
<div class="movie-info border-gray-800">
<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row ">
<img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" class="w-96">
<div class="ml-24">
<h1 class="text-4xl font-semibold">{{ $movie['title']}}</h1>
<div class="flex items-center text gray-400 text-sm mt-1">
            <span text>Rating</span>
            <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('m d, y')}}</span> 
            <span class="mx-2">|</span>
            <span class="text-pink-400 ">
            @foreach ($movie['genres'] as $genre)
                {{ $genre['name']}}@if (!$loop->last),@endif
        
                @endforeach
            </span> 
            </div>
            <p class="text-gray-380 mt-8">
            
            {{ $movie['overview']}}
            </p></br>
            <div class="text-4xl font-semibold">
            <span class=" text-blue-300">Show time<span>
            <span class="mx-2">|</span>
            <span class=" text-white-300">15 : 30 hrs GMT <span>
            </div>
        <div class="mt-12">
        <h3 class="text-pink font-semibold">Featured Cast</h3>
        <div class="flex mt-1">
        @foreach($movie['credits']['crew'] as $crew)
        @if ($loop->index < 2)
        <div class="mr-8">
        <div>{{ $crew['name']}}</div>
       
        <div class="text-sm text-gray-480">{{ $crew['job']}}</div>
        </div>
        @endif
         @endforeach
</div>
</div>
 @if (count($movie['videos']['results']) > 0)

<div class="mt-4">
<a href="https://youtube.com/watch?v={{ $movie['videos']['results']['0']['key'] }}" class="flex items-center bg-orange-500 text-gray-500 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
<img src="https://img.icons8.com/dusk/64/000000/youtube-play.png"/>
<span class="ml-2">Play Trailer</span>
</a>
</div>
@endif


@endsection