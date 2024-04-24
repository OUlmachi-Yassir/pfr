<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="min-h-screen bg-no-repeat bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1486520299386-6d106b22014b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
        <div class="flex justify-end">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>
                    <form id="loginForm" method="POST" action="{{ route('check') }}">
                        @csrf
                        <div>
                            <span class="text-sm text-gray-900">Welcome back</span>
                            <h1 class="text-2xl font-bold">Login to your account</h1>
                        </div>
                        <div class="my-3">
                            <label class="block text-md mb-2" for="email">Email</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" id="email" name="email" placeholder="Email">
                            <div id="emailError" class="text-red-500 hidden"></div>
                        </div>
                        <div class="mt-5">
                            <label class="block text-md mb-2" for="password">Password</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="password" id="password" name="password" placeholder="Password">
                            <div id="passwordError" class="text-red-500 hidden"></div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <input class="cursor-pointer" type="checkbox" name="rememberme">
                                <span class="text-sm">Remember Me</span>
                            </div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                        <div class="">
                            <button id="loginButton" class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">Login now</button>
                            <div id="errorMessage" class="text-red-500 hidden"></div> <!-- Error message div -->
                        </div>
                    </form>
                    <p class="mt-8">Don't have an account? <span class="cursor-pointer text-sm text-blue-600"><a href="{{ route('register') }}">Join free today</a></span></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission
            var email = document.getElementById('email').value.trim();
            var password = document.getElementById('password').value.trim();
            var isValid = true;

            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').innerText = 'Invalid email address';
                document.getElementById('emailError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('emailError').classList.add('hidden');
            }

            // Validate password length
            if (password.length < 8) {
                document.getElementById('passwordError').innerText = 'Password must be at least 8 characters long';
                document.getElementById('passwordError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('passwordError').classList.add('hidden');
            }

            // If all fields are valid, submit the form
            if (isValid) {
                // Submit the form to the server for further validation
                document.getElementById('loginForm').submit();
            } else {
                // Display error message
                document.getElementById('errorMessage').innerText = 'Please correct the errors above.';
                document.getElementById('errorMessage').classList.remove('hidden');
            }
        });

        // Function to handle error message display on failed login attempt
        @if ($errors->any())
            document.getElementById('errorMessage').innerText = '{{ $errors->first('message') }}';
            document.getElementById('errorMessage').classList.remove('hidden');
        @endif
    </script>
</body>
</html>
