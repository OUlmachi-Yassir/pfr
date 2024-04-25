<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

            <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link href='https://fonts.googleapis.com/css?family=Zen Dots' rel='stylesheet'>
</head>
<style>
    .workwise{
            font-family: 'Zen Dots';font-size: 22px;
          }

          .oooo{
            background: rgb(236,236,236);
            background: radial-gradient(circle, rgba(236,236,236,1) 0%, rgba(178,210,248,1) 100%);
          }
    
</style>
<body class="oooo">
<div class="">
    
<nav class="mx-4 shadow-xl rounded-full hover:border-slate-400">
    <div class=" flex flex-wrap items-center justify-between my-2 mx-4">
    <a href="{{url('/')}}" class="flex items-center">
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
                    @if(auth()->user()->role === 'utilisateur')
                    <li>
                        <a href="{{route('dashboard')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
                    @endif
                    @if(auth()->user()->role === 'freelancer')
                    <li>
                        <a href="{{route('freelancers.index')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Project</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('profile.edit')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Profile</a>
                    </li>
                    
                    </ul>
                    <div class="py-1">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</button>
                        </form>
                    </div>
                </div>
            </li>
            @if(auth()->user()->role === 'entreprise')
            <li>
            <a href="{{route('myPost')}}" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">My-Post</a>
            </li>
            @endif
            <li>
                
            </li>
            <li>
            <a href="{{route('feedback.form')}}" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">My-Feed</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

<div class="flex flex-wrap items-center justify-center ">

      <div class="flex flex-col items-center mt-16">
        <p class="text-4xl font-bold ">Welcome to <span class="text-4xl ww text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500">W-W</span>, the ultimate platform</p>
        <p class="text">that seamlessly combines the professional networking with the dynamic freelancing ecosystem</p>
        <p class="">Whether you're a skilled professional seeking new opportunities</p>
</div>
</div>
<br><br>
<div class="flex justify-center m-auto items-center  w-96">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4 ww">Provide Feedback</h2>
        @if (session('success'))
            <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 relative">
                {{ session('success') }}
                <span id="closeIcon" class="absolute top-0 right-0 mr-4 mt-3 cursor-pointer">&times;</span>
            </div>
        @endif

        <form action="{{ route('feedback.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Feedback Message:</label>
                <textarea id="message" name="message" rows="5" class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit Feedback</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeIcon = document.getElementById('closeIcon');
        const successMessage = document.getElementById('successMessage');

        if (closeIcon && successMessage) {
            closeIcon.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        }
    });
</script>
    
</body>
</html>