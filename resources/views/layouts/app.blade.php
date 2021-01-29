<!doctype html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
   <title>Vas Cinemas</title>

   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <!-- ... --->
  <body class="font-sans bg-gray-900 text-white">
        <nav class ="border-b border-pink-800">
          <div class="container mx-auto px-4 flex flex-cols md:flex-row items-center justify between px-4 py-6 ">
            <ul class="flex flex-cols md:flex-row items-center">
              <li>
                <a href="{{ route('movies.index')}}">
                  <img src="{{URL('/images/movie-clapper.PNG')}}" width ="50" class="md:ml-6">
                </a>
                <h3 class="ml">VasconCinema</h3>
              </li>
              <li class= "md:ml-14 mt-3 md: mt-0">
                <a href="{{ route('movies.index')}}" class="hover:text-pink-300">SHOW TIME</a>
              </li>
              <li class= "md:ml-14 mt-3 md: mt-0">
                <a href="#" class="hover:text-pink-300">CINEMA LOCATIONS</a>
              </li>
              <li class= "md:ml-14 mt-3 md: mt-0">
                <a href="{{ route('tv.index')}}" class="hover:text-pink-300">ADD MOVIES</a>
              </li>
        <li class= "md:ml-14 mt-3 md: mt-0">
                <a href="#" class="hover:text-pink-300">ABOUT US</a>
              </li>
              <li class= "md:ml-14 mt-3 md: mt-0">
                <a href="#" class="hover:text-pink-300">CONTACT US</a>
              </li>
        <div class="md:ml-16">
              <div class="relative">
                <input type="text" class="bg-pink-800 rounded-full w-70 px-4 pl-25 py-1  focus:outline-none focus:shadow-outline"  placeholder="search"> 
              </div>
        </div>
        <div class="md:ml-4 mt-3 md: mt-0 ">
          <a href="#">
         <img src="{{URL('/images/avatar.PNG')}}" class="rounded-full w-8">
          </a>
        
        </div>
        </div>
        
   </nav>
  @yield('content')
  </body>
  </html>