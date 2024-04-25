<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<style>
    .oooo {
      background: rgb(236, 236, 236);
      background: radial-gradient(circle, rgba(236, 236, 236, 1) 0%, rgba(178, 210, 248, 1) 100%);
    }
</style>
<body class="oooo">
<div class="flex flex-wrap items-center justify-center ">

      <div class="flex flex-col items-center mt-16">
        <p class="text-4xl font-bold ">Welcome to <span class="text-4xl ww text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-orange-500">W-W</span>, the ultimate platform</p>
        <p class="text">that seamlessly combines the professional networking with the dynamic freelancing ecosystem</p>
        <p class="">Whether you're a skilled professional seeking new opportunities</p>
</div>
</div>
<a href="{{route('dashboard')}}" class="bg-blacke-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">go back</a>
<br><br>
<div class="flex justify-center m-auto items-center  w-96">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Provide Feedback</h2>
        @if (session('success'))
            <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 relative">
                {{ session('success') }}
                <span id="closeIcon" class="absolute top-0 right-0 mr-4 mt-3 cursor-pointer">&times;</span>
            </div>
        @endif

        <form action="{{ route('feedback.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Feedback Message:</label>
                <textarea id="message" name="message" rows="5" class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit Feedback</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeIcon = document.getElementById('closeIcon');
        const successMessage = document.getElementById('successMessage');

        if (closeIcon && successMessage) {
            closeIcon.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        }
    });
</script>
    
</body>
</html>