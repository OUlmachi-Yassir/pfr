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


<div class="bg-inherit py-16 pt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                The Blockchain-only hiring platform
            </h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                Organic, genuine conversations with higher response rates than
                LinkedIn or cold email.
            </p>
        </div>
    </div>
    <div class="mt-10 pb-1">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 "></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                Blockchain developers
=
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-gray-700">500+</dd>
                        </div>
                        <div
                            class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                Response rate
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-gray-700">58%</dd>
                        </div>
                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                New devs a month
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-gray-700">30+</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="inline-flex items-center justify-center w-full">
    <hr class="w-[600px] h-1 my-8  border-0 rounded bg-gradient-to-r from-blue-500 to-orange-500">
</div>
<br><br>

<h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl flex justify-center">Feedbacks</h1>

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
<br><br>
{{ $feedbacks->links() }}


<br><br>
<footer
  class=" text-center text-surface/75  dark:text-white/75 lg:text-left"  style="background: rgb(16,22,128);
background: linear-gradient(0deg, rgba(16,22,128,1) 0%, rgba(45,253,251,0) 100%);">
  <div
    class="flex items-center justify-center  lg:justify-center dark:text-gray-800 ">
    
    <!-- Social network icons container -->
    <div class="flex justify-center">
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 320 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4 ">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 512 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 488 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 448 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 448 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
        </svg>
      </a>
      <a href="#!" class="[&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 496 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
        </svg>
      </a>
    </div>
  </div>

  <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- TW Elements section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <span class="me-3 [&>svg]:h-4 [&>svg]:w-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
            </svg>
          </span>
          
          <span class="workwise text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500">Work-Wise</span>
          
        </h6>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing
        elitLorem ipsum dolor sit amet, consectetur adipisicing
        elit. Lorem ipsum dolor sit amet, consectetur adipisicing
        elit.
        </p>
      </div>
      <!-- Products section -->
      <div>
        <h6
          class="mb-4 text-grey-800 flex justify-center font-semibold uppercase md:justify-start">
          Products
        </h6>
        <p class="mb-4">
          <a href="#!">HTML</a>
        </p>
        <p class="mb-4">
          <a href="#!">CSS</a>
        </p>
        <p class="mb-4">
          <a href="#!">JAVA Script </a>
        </p>
        <p>
          <a href="#!">Laravel</a>
        </p>
      </div>
      <!-- Useful links section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Useful links
        </h6>
        <p class="mb-4">
          <a href="#!">Pricing</a>
        </p>
        <p class="mb-4">
          <a href="#!">Settings</a>
        </p>
        <p class="mb-4">
          <a href="#!">Orders</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
              <path
                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
          </span>
          SAFI, YOUCODE 10012, MORROCO
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
          </span>
          ***@example.com
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                clip-rule="evenodd" />
            </svg>
          </span>
          +212 6************
        </p>
        <p class="flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                clip-rule="evenodd" />
            </svg>
          </span>
          + 01 234 567 89
        </p>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class=" p-6 text-center">
    <span>© 2024 Copyright:</span>
    <a class="font-semibold" href="#"
      >          <span class="workwise text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500">Work-Wise</span>
</a
    >
  </div>
</footer>
        
   
                                            
  

  
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
