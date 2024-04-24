
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body>
    

<div class="h-screen flex items-center justify-center bg-gray-100">
    <form action="{{ route('jobe.update', $jobe->id) }}" method="POST" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 ">
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
        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
        </div>
    </form>
</div>

</body>
</html>