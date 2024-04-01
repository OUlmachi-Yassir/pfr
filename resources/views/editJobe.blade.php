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
