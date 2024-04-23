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
        <br><br>
        
        <div class="flex flex-wrap gap-2 px-3">
            <div
                class="group w-[400px]  rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">Total Utilisateurs:</p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm"> {{ $userCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD4ElEQVR4nO1ZS0hUURj+bEwENaXShbTJByi0VkQFkfABiroIVy4SClzki7ClhEQTjkZIC5EQjXytgsAHEpRmULYQHUYYTBitsFSGSU0lpz/+0z1xGR3G0XvmAX7wM5c795zv/+75zrn3/BcwHlcA3ADQCeA1gHkAXwD8AvAeQDRCEJcB3AHwEQD5CDNCCJcAPAKwIxOMiYmh8vJyamtro/HxcbJarbS2tkYzMzNkMpn4mgMA2QgB3ATglIkXFhbSyMgI7ezskDe0tLTIUfit2WoCQLM2ggHDBQAvZeIFBQU0OztLx8Hu7i7l5OQcZas9AI8BxKpOPkmblBQfH0/9/f10EvAoLS8v0/DwMFVXV1NkZKQU8kG1gE9MlJqaSna7nYyC1WrVj4ZS/GSSpaUlMhoIkAAbkywsLIStgAkmGRsbC1sBz5ikp6cnbAXcZ5LW1tawFXCLSWpra8NWQAmTFBUVha2Aa0ySmZkZtgISmCQuLi4sBZwHYJFECgVYNC7D0SFJ8vPzDReQl5enF9GuQsA6d87v9aowPT0tBfxQIUCJdQI5F0THq6urpAorKyvqBZSWlpLD4TA8eYfDQSUlJUoFbOp3UU1NTYYl39jY6LlD21AhYEhPwhv0xcXFUydvs9nkZl8fgyoEpAH4rieqqqo6tYCKigrP5NcApEIRuOPnANwRERGCsLOz88TJt7e36xN3a32nIAAY0Fupr6/P7+R7e3s9rfMCAcRVAPv6oW9oaKDt7W2fiW9tbVF9fb2nbfZV2sYb7nrWd5KSkshisdDe3t6hxPkcWyYxMfGoulATgoSnR9U/09LSaGhoSDyYeH0fGBgQ57zUSnsQRJgAPNAmoNjsp6eney3s8n+jo6P6Sdum9RFUxAPoZh/LqltHRwdlZWWJQi9Hdna2WK1k3VTzPLfhtkFDOoAnALbkHZ6fn/c5iefm5vSjsgugX9vpBQTnAFwH8ArAH5lIbGys+OUaJz/cBgcHRbnQ5XKJ4GOeB5WVlf+XzoSEBJLPEi3eaR9GTKoq0rcBLErC6OhoqqmpEVU6Xhqbm5spKirKq/9l8DV8Lbex2+1iSZU3QIvPAO4BuKjEJikpKWQ2m2lzc/OQPdbX16mrq4uKi4spOTlZiOTgYz7H/21sbBxq53K5qLu7mzIyMgyx15E2yc3NFR8wDg4OSBXcbjdNTk5SWVnZqez1Vu/turo68cYYaNhsNsHtYa83xxEgLual0Ol0UrDhdDpFLv5sdAKy9/UX8FcAVwhCBVNTU/4LCOHwiW8hkCR5ia++0//3JZ1CNB4eR0CUJuJriN15s5bbGc4AA/EXRTuKZoeiodsAAAAASUVORK5CYII=">
            </div>
            <div
                class="group w-[400px] rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">  Total Enterprises: 
            </p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm">{{ $enterpriseCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAqklEQVR4nO2WwQ6AIAxD+f+frhcPxigELG6UvoSDMzF5ssJKMesB0goHaiKjWOQr7NYIazWoiczCIqw/dq/3PrfqdORFWFgk645MH3nwU0ZkREaBRSbvCOu74cevjEgvcEbUMgKLJMsIC1kROCMNPGuVzYdGqIwoUBGRaS0ZEfge2b21WMiKIDoj11rt3TYivcAiJ26tbBl5opaRN8IzsqwIkq8mMiKmBHIAGcKdfwldIgoAAAAASUVORK5CYII=">
            </div>
            <div
                class="group w-[400px] rounded-lg bg-gradient-to-r from-slate-100 to-gray-400 p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3] flex justify-between"
            >
            <div><p class="bg-gradient-to-r from-zinc-900 to-indigo-600 bg-clip-text text-transparent text-2xl">  Total Jobs: 
            </p>
                <p class="bg-gradient-to-b from-stone-900 to-indigo-800 bg-clip-text text-transparent text-sm">{{ $jobCount }}</p>
                </div>
                
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEj0lEQVR4nO2YXYgbVRTHj0V9qkVFsFj6YKtQ6uLXU0HENz+w0NjiiyKyi4++CGL9AFuLVSjbNkvFlbVushTZsq2uNcm2KqskXUwEizqbrGHJ7iSbREyTzD0TjW5S9cqZZEoym6/dZJJJMgf+kJlM7r3/X865c2YAzDDDDDNqRGIC9sfG4ee4DVA6C6t/TsNfeSf4c06w5hwwoF6HiAcRkeutUCjkhXZE6gxsiY2Df2kUeHoSeN65Vjkn/JNzwAd8Cm4uQnhdbwCCIPDFxcU53c2vnAaJzGfOVzZfBsIBswSBc34DY+yS3gBIumZC1AaB0IfApbP1zZdkwyn6LWPsbsbYNb0B6JYJiQnYT+YjH5eYm93J865NPBO/rIg+K+e05XAB7itCcLUDgC6ZEB+HnwhAuvjv52bv4XJ6hctXg9cXQZ/pHH2nKYUTNAYiPtcuAC3PhPAYrBKA7HTRmGtTwbyU4Fn/IZ71H1Y+0zn6TlMK8zSGJEkPaBfudrv54OAgt1gsNUXXeDyedQFoaSYsjcJ/BGD1y4IpSnmamIyrRhUIiIVyKC+DDI3BGLtVu/BGzKsaGhpaN4CWQVhSAThqAXinMgAHyDRGKpXaol24aq5eijd6XTXpXAKHC+brlEAmk9nVtQCi6iY4uYFN0AnHaQxZll8Q336Fewa28m933dGU5h7azqNj1vYBSH4Klo3eBldnYDeNgYjn3C0wfx3Cg9vbB4AibgOhNAsaaoQcMEK/RcQdjLFcq8yraiuAxBRsjnwC6YZbYSd8w3+Em6gVRsQLtJCuBqBCiI/DLw08DI2Qee3DkHvgzjID6m/qGa103dz929oPQI3fJ2Dfbza4Qo/D6UnlcThLuz1teGrNF//5g4yxf9WFzD+6uwzCRgGQ+cSBxzoHoF7IsnwvIn6hXUjo8YcV5V+yFKRmjnpcTVWuMwwAURS3xmKxvcvLy6PBYDDGGMtXWkjPAhA07We1hawB0KRMAGhmADdLALtoDxCf3qPsAX8P7m26/nOvDnUfgNSZjxQI8X2PNAWBzP/hu9x9ALBDMgF0OgOEGq+smlUgEKDX7c/TG6dkMnkLY+wZxljQUBkg6Gg+HA4rzx6lgYi3I2LUMABQJ0mS9CLNL7pOvoFe+wr67CJ+b3uyCOHZngeQSqW20fyBz45eQ5+dK/LaItqXsD1bAqDOP3WkYL4o9bwJAA2SAajz/d3wGYD9DkDo3B5wG2PsQN8CaFsIBisBcebkW+izxdBri8pe+1Nrjl3WN9FnDyu9ww8TT/QcgEBZX2BfWXv8XmnfsKw7AKHF7a8oitZIJHJXNQDrPe4aAAsLCxV7f8MDwBb3/uGL1tdKe/++AZBMJpW0X/j8aL609zc8AEHn254JYMrgGYA63/bqKTV3uuZxzwPAOur6PQBNAHZjZwC2SJzzG2m++XNHOPN2UQZg67SD5vt1+v3sVc9YXwJ4meYLXRw+EXIO9yWAcCKR2KxAcA5/F/lqxBgAOhVLzuMz4UvW/gVAseg4diX69an+BRCZObbTf/7d/gXQisZIGcQMM8wwAwrxP+E9oCvgNbghAAAAAElFTkSuQmCC">
            </div>
        </div>
        <br><br>
    </div>
    <br><br>
    <div class="grid grid-cols-4 gap-4 w-full lg:grid-cols-3 md:grid-cols-1 px-4" id="searchResults"></div>


     
<div class="flex flex-wrap relative justify-center gap-5">
        

    <br><br>

    <div id="jobCardsContainer" class="flex flex-col items-center">
    @foreach ($jobes as $jobe)
    <div class="bg-gradient-to-l from-slate-300 to-slate-100 text-slate-600 border border-slate-300 grid grid-col-2 rounded-lg  p-4 gap-4  w-[500px] hover:-translate-y-2 hover:shadow-xl shadow-gray-800">
        
        <div class="">
            <div class="flex justify-between">
            <div class="font-semibold text-lg">{{ $jobe->titre }}</div>
            <div class="mt-2 text-gray-600">{{ \Carbon\Carbon::parse($jobe->created_at)->diffForHumans() }}</div>
            </div>
            
            <div class="mt-2 text-gray-600">Type: <span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 w-[100px] text-green-900">{{ $jobe->type }}</span> </div> 
            <div class="mt-2 text-gray-600 flex items-center"><span class="w-6"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAqklEQVR4nO2WwQ6AIAxD+f+frhcPxigELG6UvoSDMzF5ssJKMesB0goHaiKjWOQr7NYIazWoiczCIqw/dq/3PrfqdORFWFgk645MH3nwU0ZkREaBRSbvCOu74cevjEgvcEbUMgKLJMsIC1kROCMNPGuVzYdGqIwoUBGRaS0ZEfge2b21WMiKIDoj11rt3TYivcAiJ26tbBl5opaRN8IzsqwIkq8mMiKmBHIAGcKdfwldIgoAAAAASUVORK5CYII="></span> {{ $jobe->enterprise->industrie }}</div>
        </div>
        
        <button class="rounded-md bg-slate-300 hover:bg-slate-600 hover:text-slate-200 duration-300 p-2" onclick="toggleCard('{{ $jobe->id }}')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        <polyline points="15 3 21 3 21 9"></polyline>
        <line x1="10" y1="14" x2="21" y2="3"></line>
      </svg>
        </button>

       

       
        <div id="cardContent{{ $jobe->id }}" class="hidden">


        <div class="m-5">
  <div class="group mx-2 mt-10 grid max-w-screen-md grid-cols-12 space-x-8 overflow-hidden rounded-lg border py-8 text-gray-700 shadow transition hover:shadow-lg sm:mx-auto">
    <a href="#" class="order-2 col-span-1 mt-4 -ml-14 text-left text-gray-600 hover:text-gray-700 sm:-order-1 sm:ml-4">
      <div class="group relative h-16 w-16 overflow-hidden rounded-lg">
        <img src="{{asset('images/' . $jobe->enterprise->logo)}}" alt="olm" class="h-full w-full object-cover text-gray-700" />
      </div>
    </a>
    <div class="col-span-11 flex flex-col pr-8 text-left sm:pl-4">
      <h3 class="text-sm text-gray-600">{{ $jobe->enterprise->industrie }}</h3>
      <a href="#" class="mb-3 overflow-hidden pr-7 text-lg font-semibold sm:text-xl"> {{ $jobe->titre }}</a>
      <p class="overflow-hidden pr-7 text-sm">{{ $jobe->discreption }}</p>

      <div class="mt-5 flex flex-col space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
        <div class=""><span class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 text-green-900">{{ $jobe->type }} </span></div>
        <div class=""><span class="ml-2 mr-3 rounded-full bg-blue-100 px-2 py-0.5 text-blue-900">a descuter</span></div>
      </div>
      <br>
      <div>
    <form class="flex flex-wrap gap-1" action="{{ route('jobe.apply', ['jobeId' => $jobe->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" value="{{ $jobe->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div class="flex  w-full items-center gap-1.5">
                    <label class="text-sm text-gray-600 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Resume-fill</label>
                    <input class="flex  rounded-md border border-blue-300 border-input bg-white text-sm text-gray-400 file:border-0 file:bg-blue-600 file:text-white file:text-sm file:font-medium" type="file" name="cv" required />
                </div>
                <button type="submit" class="hover:bg-gray-700 bg-gray-800 text-gray-100 mt-6 rounded p-2 px-6">Submit</button>
            </form>
            </div>
        </div>
            </div>
            
        </div>

        </div>
    </div>
    <br>
    @endforeach
</div>

<div class="cartContainer">

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

        var originalDate = result.created_at;
        var dateOnly = originalDate.split("T")[0];
        var dateObject = new Date(dateOnly);
        var formattedDate = dateObject.toLocaleString('default', { year: 'numeric', month: 'long', day: 'numeric' });
        console.log(originalDate);
        resultCard.innerHTML = `
    <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
    <div class="flex justify-between">
        <div class="font-semibold text-lg">${result.titre}</div>
        <div class="mt-2 text-gray-600"> ${formattedDate}</div>
    </div>
    <div class="ml-2 mr-3 rounded-full bg-green-100 px-2 py-0.5 w-[100px] text-green-900"> ${result.type}</div>
    <div class="mt-2 text-gray-600">${result.discreption}</div>
    <div class="mt-2 text-gray-600">Competence:<span class="ml-2 mr-3 rounded-full bg-red-100 px-2 py-0.5 w-[100px] text-red-900">${result.competence}</span> </div>

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

