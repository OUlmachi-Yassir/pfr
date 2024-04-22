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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        

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

    .flex.flex-col {
  opacity: 0; 
  transform: translateX(-50px); 
  transition: opacity 0.8s ease, transform 0.8s ease; 
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
    <div class="flex flex-wrap items-center justify-center">
      <div class="flex flex-col items-center">
        <h1 class="workwise flex items-center mb-1 text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500"><span><img src="{{ asset('images/olm.png') }}" class="block ml-4 h-14 my-1 bg-cover bg-center" alt="Logo"></span>Work-Wise</h1>
        <p class="text-4xl font-bold ">Welcome to <span class="text-4xl ww text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500">W-W</span>, the ultimate platform</p>
        <p class="text">that seamlessly combines the professional networking with the dynamic freelancing ecosystem</p>
        <p class="">Whether you're a skilled professional seeking new opportunities</p>
        
        <div class="flex h-12 justify-center gap-x-6 dark:text-white">
    <a class="group flex h-min items-center disabled:opacity-50 disabled:hover:opacity-50 hover:opacity-95 justify-center ring-none rounded-lg shadow-lg font-semibold py-2 px-4 font-dm focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-violet-500 border-b-violet-700 disabled:border-0 disabled:bg-violet-500 disabled:text-white ring-white text-white border-b-4 hover:border-0 active:border-0 hover:text-gray-100 active:bg-violet-800 active:text-gray-300 focus-visible:outline-violet-500 text-sm sm:text-base dark:bg-gray-700 dark:border-gray-700 dark:border-b-gray-900"
        href="{{ route('register') }}">
        Create demos for free
    </a>
    <a class="group flex h-min ring-none items-center justify-center hover:opacity-95 disabled:opacity-50 rounded-lg py-2 px-4 font-dm focus:outline-none !ring-transparent text-violet-800 border border-violet-500 border-b-violet-400 border-b-4 hover:border active:border bg-white hover:text-violet-900 hover:bg-gray-50 active:bg-gray-100 active:text-violet-600 focus-visible:outline-violet-600 focus-visible:ring-violet-700 text-sm sm:text-base dark:bg-gray-700 dark:border-gray-700 dark:border-b-gray-900 dark:text-white"
        href="">
        <svg aria-hidden="true" class="h-3 w-3 flex-none fill-violet-600 group-active:fill-current">
            <path
                d="m9.997 6.91-7.583 3.447A1 1 0 0 1 1 9.447V2.553a1 1 0 0 1 1.414-.91L9.997 5.09c.782.355.782 1.465 0 1.82Z">
            </path>
        </svg>
        <span class="ml-3">For More feedBack</span>
    </a>
</div>


      </div>
    <br><br>
      <div>
      <img class="vibrating-image" src="{{ asset('images/Design_sans_titre-removebg-preview.png') }}" alt="#">
    </div>
  </div>
<br><br>
<div class="inline-flex items-center justify-center w-full">
    <hr class="w-[600px] h-1 my-8  border-0 rounded bg-gradient-to-r from-blue-500 to-orange-500">
</div>
<br><br>
<div class="flex flex-wrap justify-center items-center">
  <img class="vibrating-image" src="{{ asset('images/Na_.png') }}" alt="img">
  <div class="flex flex-col justify-center ml-3 ">
    <h1 class="text-4xl font-bold mb-8">About Us</h1>
    <p class="text-xl font-bold text-gray-700 mb-6">WORK-WISE is on a mission to foster meaningful connections:</p>
    <p class="text-lg text-gray-700 mb-6 flex items-center"><span><svg
    class="w-5 h-5"
    stroke="currentColor"
    stroke-width="1.5"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</span> For Job Seekers: Streamline your job search by creating a comprehensive profile,<br> exploring diverse opportunities, applying with ease, and expanding your professional network.</p>
    <p class="text-lg text-gray-700 mb-6 flex items-center"><span><svg
    class="w-5 h-5"
    stroke="currentColor"
    stroke-width="1.5"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</span>For Businesses: Simplify the recruitment process by posting targeted job listings,<br> finding qualified candidates, and establishing lasting relationships with talented professionals.</p>
    <p class="text-lg text-gray-700 mb-6 flex items-center"><span><svg
    class="w-5 h-5"
    stroke="currentColor"
    stroke-width="1.5"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</span>For Freelancers: Enhance your visibility by showcasing your skills, finding stimulating projects,<br> applying with a single click, and advancing your independent career.</p>
  </div>
</div>

<br><br>
<div class="inline-flex items-center justify-center w-full">
    <hr class="w-[600px] h-1 my-8  border-0 rounded bg-gradient-to-r from-blue-500 to-orange-500">
</div>
<br><br>


<h1>Feedbacks</h1>

<div class="flex flex-wrap items-center justify-center gap-3">
@foreach($feedbacks as $feedback)
    @if($feedback->user->role == 'utilisateur')
        @if($feedback->user && $feedback->user->profile)
            @php
                $profilePicture = $feedback->user->profile->profile_picture;
            @endphp
            <div class="w-full max-w-md px-8 py-4 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400" alt="Testimonial avatar" src="{{ asset('images/' . $profilePicture) }}">
                </div>

                <h2 class="mt-2 text-xl font-semibold text-gray-800 dark:text-white md:mt-0">{{$feedback->user->role}}</h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{ $feedback->message }}</p>

                <div class="flex justify-end mt-4">
                    <a href="#" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">{{ $feedback->user->name }}</a>
                </div>
            </div>

        @endif
    @elseif($feedback->user->role == 'freelancer')
        @if($feedback->user && $feedback->user->freelancer)
            @php
                $profilePicture = $feedback->user->freelancer->logo;
            @endphp

            <div class="w-full max-w-md px-8 py-4 mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400" alt="Testimonial avatar" src="{{ asset('images/' . $profilePicture) }}">
                </div>

                <h2 class="mt-2 text-xl font-semibold text-gray-800 dark:text-white md:mt-0">{{$feedback->user->role}}</h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-200">{{ $feedback->message }}</p>

                <div class="flex justify-end mt-4">
                    <a href="#" class="text-lg font-medium text-blue-600 dark:text-blue-300" tabindex="0" role="link">{{ $feedback->user->name }}</a>
                </div>
            </div>
        @endif
    @endif
@endforeach

</div>



        
   
                                            
  

  
  <script>
    $(document).ready(function() {
  // Animate the elements when the page loads
  $('.flex.flex-col').css({'opacity': '1', 'transform': 'translateX(0)'}); // Change initial properties
  $('.vibrating-image').css({'opacity': '0', 'transform': 'translateX(-50px)'}); // Move image to the left
  
  $('.vibrating-image').animate({
    opacity: 1,
    translateX: 0 
  }, 1000);
});

  </script>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    </body>
</html>
