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

          .oooo{
            background: rgb(236,236,236);
            background: radial-gradient(circle, rgba(236,236,236,1) 0%, rgba(178,210,248,1) 100%);
          }
        </style>
        
    </head>
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
                    <li>
                        <a href="{{route('dashboard')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
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
    <div class="flex flex-col justify-center items-center">
        <div class="relative rounded-lg w-1/3 overflow-hidden  before:absolute before:w-12 before:h-12 before:content[''] before:right-0 before:bg-violet-500 before:rounded-full before:blur-lg  after:absolute after:-z-10 after:w-20 after:h-20 after:content['']  after:bg-rose-300 after:right-12 after:top-3 after:rounded-full after:blur-lg flex justify-center m-auto">
        <input type="text" id="searchInput" placeholder="Search by title, competence, or type" class="relative bg-transparent ring-0 outline-none border border-neutral-500 text-white placeholder-white-700 text-sm rounded-lg focus:ring-violet-500 placeholder-opacity-60 focus:border-violet-500 block w-full p-2.5 checked:bg-emerald-500">
        </div>
        <br>
        <div class="flex flex-wrap items-center gap-10" id="searchResults"></div>
    </div>
    <br><br>

     
<div class="flex flex-wrap relative justify-center gap-5">
        <div class="flex flex-col w-[400px] gap-2 max-[500px]:grid-cols-1 px-3">
            <div
                class="group w-full rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">Total Utilisateurs:</p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm"> {{ $userCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD4ElEQVR4nO1ZS0hUURj+bEwENaXShbTJByi0VkQFkfABiroIVy4SClzki7ClhEQTjkZIC5EQjXytgsAHEpRmULYQHUYYTBitsFSGSU0lpz/+0z1xGR3G0XvmAX7wM5c795zv/+75zrn3/BcwHlcA3ADQCeA1gHkAXwD8AvAeQDRCEJcB3AHwEQD5CDNCCJcAPAKwIxOMiYmh8vJyamtro/HxcbJarbS2tkYzMzNkMpn4mgMA2QgB3ATglIkXFhbSyMgI7ezskDe0tLTIUfit2WoCQLM2ggHDBQAvZeIFBQU0OztLx8Hu7i7l5OQcZas9AI8BxKpOPkmblBQfH0/9/f10EvAoLS8v0/DwMFVXV1NkZKQU8kG1gE9MlJqaSna7nYyC1WrVj4ZS/GSSpaUlMhoIkAAbkywsLIStgAkmGRsbC1sBz5ikp6cnbAXcZ5LW1tawFXCLSWpra8NWQAmTFBUVha2Aa0ySmZkZtgISmCQuLi4sBZwHYJFECgVYNC7D0SFJ8vPzDReQl5enF9GuQsA6d87v9aowPT0tBfxQIUCJdQI5F0THq6urpAorKyvqBZSWlpLD4TA8eYfDQSUlJUoFbOp3UU1NTYYl39jY6LlD21AhYEhPwhv0xcXFUydvs9nkZl8fgyoEpAH4rieqqqo6tYCKigrP5NcApEIRuOPnANwRERGCsLOz88TJt7e36xN3a32nIAAY0Fupr6/P7+R7e3s9rfMCAcRVAPv6oW9oaKDt7W2fiW9tbVF9fb2nbfZV2sYb7nrWd5KSkshisdDe3t6hxPkcWyYxMfGoulATgoSnR9U/09LSaGhoSDyYeH0fGBgQ57zUSnsQRJgAPNAmoNjsp6eney3s8n+jo6P6Sdum9RFUxAPoZh/LqltHRwdlZWWJQi9Hdna2WK1k3VTzPLfhtkFDOoAnALbkHZ6fn/c5iefm5vSjsgugX9vpBQTnAFwH8ArAH5lIbGys+OUaJz/cBgcHRbnQ5XKJ4GOeB5WVlf+XzoSEBJLPEi3eaR9GTKoq0rcBLErC6OhoqqmpEVU6Xhqbm5spKirKq/9l8DV8Lbex2+1iSZU3QIvPAO4BuKjEJikpKWQ2m2lzc/OQPdbX16mrq4uKi4spOTlZiOTgYz7H/21sbBxq53K5qLu7mzIyMgyx15E2yc3NFR8wDg4OSBXcbjdNTk5SWVnZqez1Vu/turo68cYYaNhsNsHtYa83xxEgLual0Ol0UrDhdDpFLv5sdAKy9/UX8FcAVwhCBVNTU/4LCOHwiW8hkCR5ia++0//3JZ1CNB4eR0CUJuJriN15s5bbGc4AA/EXRTuKZoeiodsAAAAASUVORK5CYII=">
            </div>
            <div
                class="group w-full rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">  Total Enterprises: 
            </p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm">{{ $enterpriseCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAqklEQVR4nO2WwQ6AIAxD+f+frhcPxigELG6UvoSDMzF5ssJKMesB0goHaiKjWOQr7NYIazWoiczCIqw/dq/3PrfqdORFWFgk645MH3nwU0ZkREaBRSbvCOu74cevjEgvcEbUMgKLJMsIC1kROCMNPGuVzYdGqIwoUBGRaS0ZEfge2b21WMiKIDoj11rt3TYivcAiJ26tbBl5opaRN8IzsqwIkq8mMiKmBHIAGcKdfwldIgoAAAAASUVORK5CYII=">
            </div>
            <div
                class="group w-full rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">  Total Jobs: 
            </p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm">{{ $jobCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEj0lEQVR4nO2YXYgbVRTHj0V9qkVFsFj6YKtQ6uLXU0HENz+w0NjiiyKyi4++CGL9AFuLVSjbNkvFlbVushTZsq2uNcm2KqskXUwEizqbrGHJ7iSbREyTzD0TjW5S9cqZZEoym6/dZJJJMgf+kJlM7r3/X865c2YAzDDDDDNqRGIC9sfG4ee4DVA6C6t/TsNfeSf4c06w5hwwoF6HiAcRkeutUCjkhXZE6gxsiY2Df2kUeHoSeN65Vjkn/JNzwAd8Cm4uQnhdbwCCIPDFxcU53c2vnAaJzGfOVzZfBsIBswSBc34DY+yS3gBIumZC1AaB0IfApbP1zZdkwyn6LWPsbsbYNb0B6JYJiQnYT+YjH5eYm93J865NPBO/rIg+K+e05XAB7itCcLUDgC6ZEB+HnwhAuvjv52bv4XJ6hctXg9cXQZ/pHH2nKYUTNAYiPtcuAC3PhPAYrBKA7HTRmGtTwbyU4Fn/IZ71H1Y+0zn6TlMK8zSGJEkPaBfudrv54OAgt1gsNUXXeDyedQFoaSYsjcJ/BGD1y4IpSnmamIyrRhUIiIVyKC+DDI3BGLtVu/BGzKsaGhpaN4CWQVhSAThqAXinMgAHyDRGKpXaol24aq5eijd6XTXpXAKHC+brlEAmk9nVtQCi6iY4uYFN0AnHaQxZll8Q336Fewa28m933dGU5h7azqNj1vYBSH4Klo3eBldnYDeNgYjn3C0wfx3Cg9vbB4AibgOhNAsaaoQcMEK/RcQdjLFcq8yraiuAxBRsjnwC6YZbYSd8w3+Em6gVRsQLtJCuBqBCiI/DLw08DI2Qee3DkHvgzjID6m/qGa103dz929oPQI3fJ2Dfbza4Qo/D6UnlcThLuz1teGrNF//5g4yxf9WFzD+6uwzCRgGQ+cSBxzoHoF7IsnwvIn6hXUjo8YcV5V+yFKRmjnpcTVWuMwwAURS3xmKxvcvLy6PBYDDGGMtXWkjPAhA07We1hawB0KRMAGhmADdLALtoDxCf3qPsAX8P7m26/nOvDnUfgNSZjxQI8X2PNAWBzP/hu9x9ALBDMgF0OgOEGq+smlUgEKDX7c/TG6dkMnkLY+wZxljQUBkg6Gg+HA4rzx6lgYi3I2LUMABQJ0mS9CLNL7pOvoFe+wr67CJ+b3uyCOHZngeQSqW20fyBz45eQ5+dK/LaItqXsD1bAqDOP3WkYL4o9bwJAA2SAajz/d3wGYD9DkDo3B5wG2PsQN8CaFsIBisBcebkW+izxdBri8pe+1Nrjl3WN9FnDyu9ww8TT/QcgEBZX2BfWXv8XmnfsKw7AKHF7a8oitZIJHJXNQDrPe4aAAsLCxV7f8MDwBb3/uGL1tdKe/++AZBMJpW0X/j8aL609zc8AEHn254JYMrgGYA63/bqKTV3uuZxzwPAOur6PQBNAHZjZwC2SJzzG2m++XNHOPN2UQZg67SD5vt1+v3sVc9YXwJ4meYLXRw+EXIO9yWAcCKR2KxAcA5/F/lqxBgAOhVLzuMz4UvW/gVAseg4diX69an+BRCZObbTf/7d/gXQisZIGcQMM8wwAwrxP+E9oCvgNbghAAAAAElFTkSuQmCC">
            </div>
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
</body>

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
            console.log(data);
            displaySearchResults(data);
        })
        .catch(error => {
            console.error('Error fetching search results:', error);
        });
}





function displaySearchResults(results) {
    searchResultsDiv.innerHTML = ''; 

    results.forEach(result => {
        const resultCard = document.createElement('div');
        resultCard.classList.add('job-card'); 
        
        resultCard.innerHTML = `
        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
    <div class="font-semibold text-lg">${result.titre}</div>
    <div class="mt-2 text-gray-600">Type: ${result.type}</div>
    <div class="mt-2 text-gray-600">Competence: ${result.competence}</div>
    <div class="mt-2 text-gray-600">Description: ${result.discreption}</div>
    <div class="mt-2 text-gray-600">Created At: ${result.created_at}</div>
    <!-- Add more fields as needed -->
    
    <!-- Form for applying to the job -->
    <form class="job-application-form mt-4" data-job-id="${result.id}" action="/jobe/${result.id}/apply" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="job_id" value="${result.id}">
        <input type="hidden" name="user_id" value="${result.user_id}">
        <div class="grid w-full max-w-xs items-center gap-1.5">
            <label class="text-sm text-gray-400 font-medium leading-none">Resume-fill</label>
            <input class="flex w-full rounded-md border border-blue-300 border-input bg-white text-sm text-gray-400 file:border-0 file:bg-blue-600 file:text-white file:text-sm file:font-medium" type="file" name="cv" required />
        </div>
        <button type="submit" class="hover:bg-gray-700 bg-gray-800 text-gray-100 mt-4 rounded p-2 px-6">Submit</button>
    </form>
</div>

        `;
        
        
        searchResultsDiv.appendChild(resultCard);
    });

    document.querySelectorAll('.job-application-form').forEach(form => {
        form.addEventListener('submit', function(event) {
            const jobId = this.getAttribute('data-job-id');
            this.querySelector('input[name="job_id"]').value = jobId;
        });
    });
}



</script>

