<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link href='https://fonts.googleapis.com/css?family=Zen Dots' rel='stylesheet'>

        <!-- Styles -->
        <style>
          .workwise{
            font-family: 'Zen Dots';font-size: 22px;
          }
          .ww{
            font-family: 'Zen Dots';
            font-size: xx-large;
          }

          .oooo{
            background: rgb(236,236,236);
            background: radial-gradient(circle, rgba(236,236,236,1) 0%, rgba(178,210,248,1) 100%);
          }

          
    @keyframes vibrate {
        0% { transform: translate(0, 0); }
        60% { transform: translate(-4px, -3px); }
        100% { transform: translate(0, 0); }
    }

    .vibrating-image {
        animation: vibrate 1s linear infinite;
    }

    .www {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 23%, rgba(8,27,133,1) 43%, rgba(7,62,156,1) 62%, rgba(0,212,255,1) 100%);
        color: transparent; 
        -webkit-background-clip: text; 
        background-clip: text;
        font-size: 48px; 
        font-family: 'Zen Dots';
        font-weight: bold;
    }

        </style>
        
    </head>
    <body class="oooo">
<nav class="mx-4 shadow-xl  rounded-full hover:border-slate-400">
    <div class=" flex flex-wrap items-center justify-between my-2 mx-4">
        <a href="#" class="flex items-center">
        <img src="{{ asset('images/olm.png') }}" class="block ml-4 h-14 my-1 bg-cover bg-center" alt="Logo">
        <span class="workwise mb-1 text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500 font-zenDots">W-W</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="{{url('/')}}" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Dropdown <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    @auth
                    <li>
                      <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    </li>
                    @else
                      <li>
                        <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                      </li>
                          @if (Route::has('register'))
                          <li>
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                          </li>
                          @endif
                    @endauth
                    </ul>
                    
                </div>
            </li>
           </li>
           <li>
            
           </li>
        </ul>
        </div>
        
    </div>
    </nav>
<br><br>


    <div class="flex items-center justify-center">
      <div >
        <h1 class="www">Work-Wise</h1>
      <p class=" text-lg ">Welcome to <span class="text-xl ww">W-W</span>, the ultimate platform</p>
      <p class="text">that seamlessly combines the professional networking <br>
         with the dynamic freelancing ecosystem</p>
         <p class="">Whether you're a skilled professional seeking new opportunities</p>
         <a  href="{{ route('register') }}">
            <button class="cursor-pointer uppercase bg-white px-4 py-2 active:translate-x-0.5 active:translate-y-0.5 hover:shadow-[0.5rem_0.5rem_#F44336,-0.5rem_-0.5rem_#00BCD4] transition">
              Discover More!
            </button>
          </a>
      </div>
      <div>
      <img class="vibrating-image" src="{{ asset('images/Design_sans_titre-removebg-preview.png') }}" alt="#">
      </div>
      
    </div>



    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        
    </body>
</html>
