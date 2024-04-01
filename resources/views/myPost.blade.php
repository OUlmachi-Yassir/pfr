<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

   
    
    <button id="openModalButton" class=" ml-5 cursor-pointer text-white font-bold relative text-[14px] w-[9em] h-[3em] text-center bg-gradient-to-r from-violet-500 from-10% via-sky-500 via-30% to-pink-500 to-90% bg-[length:400%] rounded-[30px] z-10 hover:animate-gradient-xy hover:bg-[length:100%] before:content-[''] before:absolute before:-top-[5px] before:-bottom-[5px] before:-left-[5px] before:-right-[5px] before:bg-gradient-to-r before:from-violet-500 before:from-10% before:via-sky-500 before:via-30% before:to-pink-500 before:bg-[length:400%] before:-z-10 before:rounded-[35px] before:hover:blur-xl before:transition-all before:ease-in-out before:duration-[1s] before:hover:bg-[length:10%] active:bg-violet-700 focus:ring-violet-700">
    Open Form
</button>

<!-- Pop-up pour le formulaire -->
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

</div>


<div id="editModal" class="modal hidden fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M18 1.42L16.56 0 9 7.56 1.44 0 0 1.41 7.56 9 0 16.56 1.44 18 9 10.44 16.56 18l1.44-1.41L10.44 9 18 1.42z"/>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>
        <!-- Contenu du formulaire d'édition -->
        <div class="modal-content py-4 text-left px-6">
            <!-- Your edit job form goes here -->
                <form action="{{ route('jobe.update', $jobe->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" name="titre" id="titre" value="{{ $jobe->titre }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="discreption" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea name="discreption" id="discreption" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $jobe->discreption }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="competence" class="block text-gray-700 text-sm font-bold mb-2">Skills/Competencies:</label>
                    <input type="text" name="competence" id="competence" value="{{ $jobe->competence }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                    <select name="type" id="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="à distance" {{ $jobe->type === 'à distance' ? 'selected' : '' }}>Remote</option>
                        <option value="hybride" {{ $jobe->type === 'hybride' ? 'selected' : '' }}>Hybrid</option>
                        <option value="à temps plein" {{ $jobe->type === 'à temps plein' ? 'selected' : '' }}>Full-time</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach

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




    
</x-app-layout>

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
    
