@extends('layouts.app')

@section('content')

        <div class="container mx-auto px-4 pt-14">
        <div class="popular-tv">
        <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Shows</h2>
        <div class="grid grid-cols-1 sm:grad-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16">
        @foreach ($popularTv as $tvshow)

          <tv-show-card :tvshow="$tvshow" />
                
        @endforeach
         </div>
        </div>
    <div class="now-rated-shows py-24">
    <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Top Rated Shows</h2>
    <div class="grid grid-cols-1 sm:grad-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16">
       
        </div>
</div>
</div>
        </div>

@endsection