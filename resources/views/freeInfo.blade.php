<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
    


<div class="container mx-auto">
    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-md">
        <h2 class="text-xl font-semibold mb-4">Ajouter un Freelancer</h2>
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('freelancers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="logo" class="block text-sm font-medium text-gray-700">Logo:</label>
                <input type="file" name="logo" id="logo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="experience" class="block text-sm font-medium text-gray-700">Expérience:</label>
                <input type="text" name="experience" id="experience" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="discreption" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="discreption" id="discreption" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label for="lieux" class="block text-sm font-medium text-gray-700">Lieux:</label>
                <input type="text" name="lieux" id="lieux" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="fonction" class="block text-sm font-medium text-gray-700">Fonction:</label>
                <select name="fonction" id="fonction" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="develloper">Développeur</option>
                    <option value="designer">Designer</option>
                    <option value="artiste">Artiste</option>
                </select>
            </div>

            <button type="submit" class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring-2 focus:ring-indigo-500">
                Ajouter
            </button>
        </form>
    </div>
</div>


</body>
</html>