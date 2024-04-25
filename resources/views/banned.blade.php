<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container mx-auto">
    <div class="flex justify-center mt-8">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ __('Banned Error') }}</h2>
                </div>
                <div class="text-gray-700 text-base">
                    <p>You are banned from accessing this website due to violation of the terms and conditions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>
<script>
    setTimeout(function() {
        window.location.href = "{{ route('login') }}";
    }, 10000); 
</script>

</html>