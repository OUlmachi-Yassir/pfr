
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<style>

button {
  font-family: inherit;
  font-size: 20px;
  background: #212121;
  color: white;
  fill: rgb(155, 153, 153);
  padding: 0.7em 1em;
  padding-left: 0.9em;
  display: flex;
  align-items: center;
  cursor: pointer;
  border: none;
  border-radius: 15px;
  font-weight: 1000;
}

button span {
  display: block;
  margin-left: 0.3em;
  transition: all 0.3s ease-in-out;
}

button svg {
  display: block;
  transform-origin: center center;
  transition: transform 0.3s ease-in-out;
}

button:hover {
  background: #000;
    
}

button:hover .svg-wrapper {
  transform: scale(1.25);
  transition: 0.5s linear;
}

button:hover svg {
  transform: translateX(1.2em) scale(1.1);
  fill: #fff;
}

button:hover span {
  opacity: 0;
  transition: 0.5s linear;
}

button:active {
  transform: scale(0.95);
}

</style>
<body>


    

<div class="h-screen flex items-center justify-center bg-gray-100">
    <form action="{{ route('jobe.update', $jobe->id) }}" method="POST" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 w-96">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" name="titre" id="titre" value="{{ $jobe->titre }}" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="discreption" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea name="discreption" id="discreption" rows="5" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $jobe->discreption }}</textarea>
        </div>
        <div class="mb-4">
            <label for="competence" class="block text-gray-700 text-sm font-bold mb-2">Skills/Competencies:</label>
            <input type="text" name="competence" id="competence" value="{{ $jobe->competence }}" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
            <select name="type" id="type" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="à distance" {{ $jobe->type === 'à distance' ? 'selected' : '' }}>Remote</option>
                <option value="hybride" {{ $jobe->type === 'hybride' ? 'selected' : '' }}>Hybrid</option>
                <option value="à temps plein" {{ $jobe->type === 'à temps plein' ? 'selected' : '' }}>Full-time</option>
            </select>
        </div>
        <div class="flex items-center justify-center">
        <button type="submit">
        <div class="svg-wrapper-1">
            <div class="svg-wrapper">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="30"
                height="30"
                class="icon"
            >
                <path
                d="M22,15.04C22,17.23 20.24,19 18.07,19H5.93C3.76,19 2,17.23 2,15.04C2,13.07 3.43,11.44 5.31,11.14C5.28,11 5.27,10.86 5.27,10.71C5.27,9.33 6.38,8.2 7.76,8.2C8.37,8.2 8.94,8.43 9.37,8.8C10.14,7.05 11.13,5.44 13.91,5.44C17.28,5.44 18.87,8.06 18.87,10.83C18.87,10.94 18.87,11.06 18.86,11.17C20.65,11.54 22,13.13 22,15.04Z"
                ></path>
            </svg>
            </div>
        </div>
        <span>Save</span>
        </button>

        </div>
    </form>
</div>

</body>
</html>