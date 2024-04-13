<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    </head>
    <body>
        
    </body>
    </html>
   
<div class="">
    
<nav class="mx-4 shadow-xl rounded-full hover:border-slate-400">
    <div class=" flex flex-wrap items-center justify-between my-2 mx-4">
        <a href="#" class="flex">
        <svg class="h-10 mr-3" width="51" height="70" viewBox="0 0 51 70" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M1 53H27.9022C40.6587 53 51 42.7025 51 30H24.0978C11.3412 30 1 40.2975 1 53Z" fill="#76A9FA"></path><path d="M-0.876544 32.1644L-0.876544 66.411C11.9849 66.411 22.4111 55.9847 22.4111 43.1233L22.4111 8.87674C10.1196 8.98051 0.518714 19.5571 -0.876544 32.1644Z" fill="#A4CAFE"></path><path d="M50 5H23.0978C10.3413 5 0 15.2975 0 28H26.9022C39.6588 28 50 17.7025 50 5Z" fill="#1C64F2"></path></g><defs><clipPath id="clip0"><rect width="51" height="70" fill="white"></rect></clipPath></defs></svg>
            <span class="self-center text-lg font-semibold whitespace-nowrap">FlowBite</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Dropdown <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{route('dashboard')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
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
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <br><br>
<div class="relative rounded-lg w-1/3 overflow-hidden  before:absolute before:w-12 before:h-12 before:content[''] before:right-0 before:bg-violet-500 before:rounded-full before:blur-lg  after:absolute after:-z-10 after:w-20 after:h-20 after:content['']  after:bg-rose-300 after:right-12 after:top-3 after:rounded-full after:blur-lg flex justify-center m-auto">
 <input type="text" id="searchInput" placeholder="Search by title, competence, or type" class="relative bg-transparent ring-0 outline-none border border-neutral-500 text-white placeholder-white-700 text-sm rounded-lg focus:ring-violet-500 placeholder-opacity-60 focus:border-violet-500 block w-full p-2.5 checked:bg-emerald-500">
</div>
<br>
    <div id="searchResults"></div>
    <br><br>




    <div class="flex flex-wrap relative justify-center gap-5">
    <div class="card sticky  top-0 left-0 text-gray-300 w-[clamp(260px,80%,300px)] h-60 hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 m-4 rounded-lg overflow-hidden relative">
      <div class="px-[50px] py-4">
        <div class="bg-orange-500 w-10 h-10 rounded-full rounded-tl-none mb-4 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-red-900 transition-all"></div>
        <div class="uppercase font-bold text-xl">
        User Statistics
        </div>
        <div class="text-gray-300 uppercase tracking-widest">
        <p>Total Utilisateurs: {{ $userCount }}</p>
        <p>Total Enterprises: {{ $enterpriseCount }}</p>
        </div>
        <div class="text-gray-400 mt-8">
        <p>Total Jobs: </p>
          <p class="font-bold">{{ $jobCount }}</p>
        </div>
      </div>
      

      <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
      <div class="h-0.5 group-hover:w-full bg-gradient-to-l  via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
    </div>
    <br><br>

    <div id="jobCardsContainer" class="flex flex-col items-center">
    @foreach ($jobes as $jobe)
    <div class="bg-gradient-to-l from-slate-300 to-slate-100 text-slate-600 border border-slate-300 grid grid-col-2 rounded-lg  p-4 gap-4  w-[500px] hover:-translate-y-2 hover:shadow-xl shadow-gray-800">
        
        <div class="">
            <div class="font-semibold text-lg">{{ $jobe->titre }}</div>
            <div class="mt-2 text-gray-600">Type: {{ $jobe->type }}</div> 
            <div class="mt-2 text-gray-600 flex items-center"><span class="w-6"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAqklEQVR4nO2WwQ6AIAxD+f+frhcPxigELG6UvoSDMzF5ssJKMesB0goHaiKjWOQr7NYIazWoiczCIqw/dq/3PrfqdORFWFgk645MH3nwU0ZkREaBRSbvCOu74cevjEgvcEbUMgKLJMsIC1kROCMNPGuVzYdGqIwoUBGRaS0ZEfge2b21WMiKIDoj11rt3TYivcAiJ26tbBl5opaRN8IzsqwIkq8mMiKmBHIAGcKdfwldIgoAAAAASUVORK5CYII="></span> {{ $jobe->enterprise->industrie }}</div>
        </div>
        
        <button class="rounded-md bg-slate-300 hover:bg-slate-600 hover:text-slate-200 duration-300 p-2" onclick="toggleCard('{{ $jobe->id }}')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        <polyline points="15 3 21 3 21 9"></polyline>
        <line x1="10" y1="14" x2="21" y2="3"></line>
      </svg>
        </button>

        <!-- Additional card content -->
        <!-- Add the additional content you want to display here -->

        <!-- Hide card content -->
        <div id="cardContent{{ $jobe->id }}" class="hidden">
        <div class="">
            <h2 class="text-2xl font-bold mb-2 text-gray-100">Dark Card</h2>
            <div class="font-semibold text-lg">{{ $jobe->titre }}</div>
            <div class="mt-2 text-gray-600">Type: {{ $jobe->type }}</div> 
            <div class="mt-2 text-gray-600">Company: {{ $jobe->enterprise->industrie }}</div>
        </div>
            <!-- Form to Insert User ID and Job ID -->
            <form action="{{ route('jobe.apply', ['jobeId' => $jobe->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" value="{{ $jobe->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="grid w-full max-w-xs items-center gap-1.5">
                    <label class="text-sm text-gray-400 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Resume-fill</label>
                    <input class="flex w-full rounded-md border border-blue-300 border-input bg-white text-sm text-gray-400 file:border-0 file:bg-blue-600 file:text-white file:text-sm file:font-medium" type="file" name="cv" required />
                </div>
                <button type="submit" class="hover:bg-gray-700 bg-gray-800 text-gray-100 mt-6 rounded p-2 px-6">Submit</button>
            </form>
        </div>
    </div>
    <br>
    @endforeach
</div>

<div class="cartContainer">
    <!-- This container will display the clicked card with the form -->
</div>

<script>
    function toggleCard(cardId) {
        const cardContainers = document.querySelectorAll('[id^="cardContent"]');
        cardContainers.forEach(container => {
            container.classList.add('hidden');
        });

        const clickedCardContainer = document.getElementById('cardContent' + cardId);
        clickedCardContainer.classList.remove('hidden');

        const cartContainer = document.querySelector('.cartContainer');
        cartContainer.innerHTML = '';
        cartContainer.appendChild(clickedCardContainer);
    }
</script>

</div>

<script>
    function openForm(jobId) {
        const formContainer = document.getElementById('formContainer' + jobId);
        formContainer.classList.toggle('hidden');
    }
</script>
<script>
    const searchInput = document.getElementById('searchInput');
const searchResultsDiv = document.getElementById('searchResults');

searchInput.addEventListener('input', function() {
    const query = searchInput.value;
    fetchSearchResults(query);
});

function fetchSearchResults(query) {
    fetch(`/search?q=${query}`)
        .then(response => response.json())
        .then(data => {
            displaySearchResults(data);
        })
        .catch(error => {
            console.error('Error fetching search results:', error);
        });
}

function displaySearchResults(results) {
    searchResultsDiv.innerHTML = ''; // Clear previous results

    results.forEach(result => {
        const resultElement = document.createElement('div');
        resultElement.textContent = result.titre; // Change this according to your data structure
        searchResultsDiv.appendChild(resultElement);
    });
}

</script>

