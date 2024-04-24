<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
    


<div class="min-h-screen flex items-center justify-center bg-gray-100 rounded-xl shadow-xl">
    <form action="{{ route('enterprise.info.store') }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-4">
            <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Logo:</label>
            <input type="file" name="logo" id="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="slogan" class="block text-gray-700 text-sm font-bold mb-2">Slogan:</label>
            <input type="text" name="slogan" id="slogan" placeholder="Slogan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="industrie" class="block text-gray-700 text-sm font-bold mb-2">Industry:</label>
            <input type="text" name="industrie" id="industrie" placeholder="Industry" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="discreption" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea name="discreption" id="discreption" placeholder="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </div>
    </form>
</div>


</body>
</html>