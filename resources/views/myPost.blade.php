<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

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
            <a href="#" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Dropdown <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{route('dashboard.entreprise')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
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

    
   
    
    <button id="openModalButton" class=" ml-5 cursor-pointer text-white font-bold relative text-[14px] w-[9em] h-[3em] text-center bg-gradient-to-r from-violet-500 from-10% via-sky-500 via-30% to-pink-500 to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-violet-500 before:from-10% before:via-sky-500 before:via-30% before:to-pink-500 before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-violet-700 focus:ring-violet-700">
    Open Form
</button>

<div id="myModal" class="modal hidden fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M18 1.42L16.56 0 9 7.56 1.44 0 0 1.41 7.56 9 0 16.56 1.44 18 9 10.44 16.56 18l1.44-1.41L10.44 9 18 1.42z"/>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>
        <!-- Contenu du formulaire -->
        <div class="modal-content py-4 text-left px-6">
        <form action="{{ route('jobe.store') }}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">Title:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" name="titre" type="text" placeholder="Title">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="discreption">Description:</label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="discreption" name="discreption" rows="5" placeholder="Description"></textarea>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="competence">Skills/Competencies:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="competence" name="competence" type="text" placeholder="Skills/Competencies">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="type">Type:</label>
        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="type" name="type">
            <option value="à distance">Remote</option>
            <option value="hybride">Hybrid</option>
            <option value="à temps plein">Full-time</option>
        </select>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            {{ __('ADD') }}
        </button>
    </div>
</form>

            </form>
        </div>
    </div>
</div>

  <br><br>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-inherit border-b border-gray-200 dark:border-gray-700">
                    @if (session('success'))
                    <div class="alert alert-success">
                    <div class="bg-green-100 border border-green-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <span class="block sm:inline"> {{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="hideAlert()">
                        <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" role="button">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </span>
                    </div>
                    </div>  
                    @endif

                    @if ($jobes->isEmpty())
                        <p>No jobes found.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($jobes as $jobe)
                                @if ($jobe->enterprise_id === auth()->user()->enterprise->id)
                                    <div class="bg-white dark:bg-gray-700 shadow-sm rounded-lg overflow-hidden">
                                        <div class="p-4">
                                            <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">{{ $jobe->titre }}</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $jobe->discreption }}</p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Compétence: {{ $jobe->competence }}</p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Type: {{ $jobe->type }}</p>
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Company: {{ $jobe->enterprise->industrie }}</p>
                                            <div class="mt-4 flex items-center justify-between">
                                                <a href="{{ route('jobe.edit', $jobe->id) }}" class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-200">Edit</a>
                                                <form action="{{ route('jobe.delete', $jobe->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-200">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <br><br>
<h1 class="ml-5 text-4xl font-bold text-gray-500 dark:text-gray-400 "><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Users</span>-Apply</h1>
<br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    User-ID
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Jobe-Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Resume
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                {{ $post->id }}
                </th>
                <td class="px-6 py-4">
                {{ $post->user_id }}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $post->jobe_id }}
                </td>
                <td class="px-6 py-4">
                {{ $post->cv }}
                </td>
                <td class="px-6 py-4">
               <!-- Button to delete post or take other actions -->
               <form action="{{ route('post.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110"
>
                        <svg
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            fill="none"
                            class="h-5 w-5 mr-2"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                            stroke-width="2"
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            ></path>
                        </svg>
                        Delete</button>
                </form>
                </td>  
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br>

<div class="flex flex-wrap justify ml-20 gap-10 items-center">
    @foreach ($jobes as $jobe)
    @if ($jobe->enterprise_id === auth()->user()->id)
      <div class="group flex flex-col justify-start items-start gap- w-96 h-70 duration-500 relative rounded-lg p-4 bg-gray-400 hover:-translate-y-2 hover:shadow-xl shadow-gray-800">
        <div alt="image here"
          class="absolute duration-700 shadow-md group-hover:-translate-y-4 group-hover:-translate-x-4  -right-10 w-1/2 h-1/2 rounded-lg bg-gray-800">
          <img src="{{asset('images/' . $jobe->enterprise->logo)}}" class="">  
      </div>

        <div class="">
          <h2 class="text-2xl font-bold mb-2 text-gray-100">Dark Card</h2>
          <div class="font-semibold text-lg">{{ $jobe->titre }}</div>
                  <div class="mt-2 text-gray-600">{{ $jobe->discreption }}</div>
                  <div class="mt-2 text-gray-600">Compétence: {{ $jobe->competence }}</div>
                  <div class="mt-2 text-gray-600">Type: {{ $jobe->type }}</div>
                  
                  <div class="mt-2 text-gray-600">Company: {{ $jobe->enterprise->industrie }}</div>
        </div>
        <div class="flex mt-4">
        <button onclick="openEditModal({{ $jobe->id }})" class="hover:bg-blue-700 bg-blue-500 text-white font-bold py-2 px-4 rounded mr-2">Edit</button>

                <form action="{{ route('jobe.delete', $jobe->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="hover:bg-red-700 bg-red-500 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </div>
      </div>
      <br>
      @endif
      @endforeach
</div>

<div class="flex ml-2">
    <button id="openFormBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter Projet</button>

    <div id="projectForm" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <form action="{{ route('projects.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            @csrf
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom du projet:</label>
                <input type="text" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            
            <div class="mb-4">
                <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                <select name="type" id="type" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="IT development">IT development</option>
                    <option value="Design">Design</option>
                    <option value="Art">Art</option>
                </select>
            </div>
            
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer Projet</button>
                <!-- Bouton pour masquer le formulaire -->
                <button id="closeFormBtn" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</button>
            </div>
        </form>
    </div>
</div>

<script>
    const openFormBtn = document.getElementById('openFormBtn');
    const projectForm = document.getElementById('projectForm');
    const closeFormBtn = document.getElementById('closeFormBtn');

    openFormBtn.addEventListener('click', () => {
        projectForm.classList.remove('hidden');
    });

    closeFormBtn.addEventListener('click', () => {
        projectForm.classList.add('hidden');
    });
</script>



<br><br>
<div class="container px-4">
    @foreach ($projet as $project)
        <div class="p-4 bg-white shadow-md rounded-md mb-4">
            <div class="flex flex-wrap gap-4 ">
            <img class="w-11 h-11 rounded-full" src="{{ asset('images/' . $project->enterprise->logo) }}" alt="olm">
            <h5 class="text-lg font-semibold">{{ $project->name }}</h5>
            <p class="text-gray-700 w-3/4">{{ $project->description }}</p>
            <p class="text-gray-700">Type: <span class="bg-green-300 text-green-800 rounded-lg px-3">{{ $project->type }}</span></p>
            </div>
            
            <div class="mt-4 flex gap-2 justify-start">
                <!-- Bouton d'édition -->
                <a href="{{ route('projects.edit', $project->id) }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold  px-4 py-2 rounded-full ">Éditer</a>
                
                <!-- Bouton de suppression -->
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded-full ">Supprimer</button>
                </form>
            </div>

            <div class="mt-4">
                <h6 class="text-lg font-semibold mb-2">Freelancers Applied</h6>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Freelancer</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Applied</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($project->freelancerProjects ?? [] as $freelancerProject)
                            <tr>
                <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1 freelancer-details" 
                    data-image-url="{{ asset('images/' . $freelancerProject->freelancer->logo) }}" 
                    data-name="{{ $freelancerProject->freelancer->user->name }}">
                    <img class="w-11 h-11 rounded-full" src="{{ asset('images/' . $freelancerProject->freelancer->logo) }}" alt="">
                    <span>{{ $freelancerProject->freelancer->user->name }}</span>
                    <div class="hidden freelancer-info"
                        data-slogan="{{ $freelancerProject->freelancer->slogan }}"
                        data-industrie="{{ $freelancerProject->freelancer->industrie }}"
                        data-description="{{ $freelancerProject->freelancer->discreption }}"
                        data-location="{{ $freelancerProject->freelancer->lieux }}"
                        data-func="{{ $freelancerProject->freelancer->fonction }}">
                    </div>
                </td>

                                <td class="px-6 py-4 whitespace-nowrap">{{ $freelancerProject->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
        </div>
    @endforeach

    {{ $projet->links() }} 
</div>



<!-- Modal -->
<div id="freelancerModal" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white rounded-lg p-8 max-w-md">
        <div class="flex items-center justify-between">
            <img id="freelancerImage" class="w-20 h-20 rounded-full" src="" alt="">
            <div>
                <h2 id="freelancerName" class="text-xl font-semibold mb-2"></h2>
                <p id="freelancerSlogan" class="text-gray-600 mb-1"></p>
                <p id="freelancerIndustrie" class="text-gray-600 mb-1"></p>
                <p id="freelancerDescription" class="text-gray-600 mb-1"></p>
                <p id="freelancerLocation" class="text-gray-600 mb-1"></p>
                <p id="freelancerFunction" class="text-gray-600 mb-1"></p>
            </div>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">&times;</button>
        </div>
    </div>
</div>

<!-- JavaScript to handle modal -->
<script>
    // Get modal elements
    const modal = document.getElementById('freelancerModal');
    const freelancerImage = document.getElementById('freelancerImage');
    const freelancerName = document.getElementById('freelancerName');
    const freelancerSlogan = document.getElementById('freelancerSlogan');
    const freelancerDescription = document.getElementById('freelancerDescription');
    const freelancerLocation = document.getElementById('freelancerLocation');
    const freelancerFunction = document.getElementById('freelancerFunction');
    const closeModalBtn = document.getElementById('closeModal');

    // Function to open modal
    function openModal(imageUrl, name, slogan, industrie, description, location, func) {
        freelancerImage.src = imageUrl;
        freelancerName.textContent = name;
        freelancerSlogan.textContent = `Slogan: ${slogan}`;
        freelancerDescription.textContent = `Description: ${description}`;
        freelancerLocation.textContent = `Location: ${location}`;
        freelancerFunction.textContent = `Function: ${func}`;
        modal.classList.remove('hidden');
    }

    // Function to close modal
    function closeModal() {
        modal.classList.add('hidden');
    }

// Add click event listener to table cells with the class 'freelancer-details'
document.querySelectorAll('.freelancer-details').forEach((element) => {
    element.addEventListener('click', (event) => {
        const imageUrl = event.currentTarget.dataset.imageUrl;
        const name = event.currentTarget.dataset.name;
        const infoDiv = event.currentTarget.querySelector('.freelancer-info');
        const slogan = infoDiv.dataset.slogan;
        const description = infoDiv.dataset.description;
        const location = infoDiv.dataset.location;
        const func = infoDiv.dataset.func;
        openModal(imageUrl, name, slogan, description, location, func);
    });
});



    // Add click event listener to close modal button
    closeModalBtn.addEventListener('click', () => {
        closeModal();
    });

    // Close modal when clicking outside of it
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
</script>



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
</body>
</html>

<script>
    function openEditModal(jobId) {
        const editModal = document.getElementById('editModal');
        editModal.classList.remove('hidden');
        fetch(`/jobs/${jobId}`)
            .then(response => response.json())
            .then(job => {
                // Populate the form fields with the fetched job details
                document.getElementById('edit-titre').value = job.titre;
                document.getElementById('edit-discreption').value = job.discreption;
                document.getElementById('edit-competence').value = job.competence;
                document.getElementById('edit-type').value = job.type;
            })
            .catch(error => console.error('Error fetching job details:', error));
    }

    document.addEventListener("DOMContentLoaded", function() {
        const editModal = document.getElementById('editModal');
        const closeButton = editModal.querySelector('.modal-close');

        function closeEditModal() {
            editModal.classList.add('hidden');
        }

        closeButton.addEventListener('click', closeEditModal);

        window.addEventListener('click', function(event) {
            if (event.target === editModal) {
                closeEditModal();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" || event.key === "Esc") {
                closeEditModal();
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Récupère les éléments du DOM
        const modal = document.getElementById("myModal");
        const btn = document.getElementById("openModalButton");
        const span = document.getElementsByClassName("modal-close")[0];

        // Ouvre la pop-up lorsque le bouton est cliqué
        btn.onclick = function() {
            modal.classList.remove("hidden");
        }

        // Ferme la pop-up lorsque l'utilisateur clique sur le bouton de fermeture ou à l'extérieur de la pop-up
        span.onclick = function() {
            modal.classList.add("hidden");
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        }

        // Ferme la pop-up lorsque l'utilisateur appuie sur la touche "Escape"
        document.addEventListener("keydown", function(event) {
            if (event.key === "Escape" || event.key === "Esc") {
                modal.classList.add("hidden");
            }
        });
    });
</script>

<script>
    function hideAlert() {
        var alertDiv = document.querySelector('.alert');
        alertDiv.style.display = 'none';
    }
</script>
    
