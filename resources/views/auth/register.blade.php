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

                    <form id="registrationForm" method="POST" action="{{ route('register') }}">
                    @csrf
                        <div>
                            <span class="text-sm text-gray-900">Welcome back</span>
                            <h1 class="text-2xl font-bold">Register to your account</h1>
                        </div>
                        <div class="my-3">
                                <label class="block text-md mb-2" for="name">name</label>
                                <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="text" id="name" name="name" placeholder="name">
                                <div id="nameError" class="text-red-500 hidden">Name is required</div>
                            </div>
                            <div>
                            <select id="role" name="role" required>
                                <option value="utilisateur">Utilisateur</option>
                                <option value="entreprise">Entreprise</option>
                                <option value="freelancer">Freelancer</option>
                            </select>           
                            </div>
                            <div class="my-3">
                                <label class="block text-md mb-2" for="email">Email</label>
                                <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" id="email" name="email" placeholder="email">
                                <div id="emailError" class="text-red-500 hidden">Invalid email address</div>
                            </div>
                            
                            
                        <div class="mt-5">
                            <label class="block text-md mb-2" for="password">Password</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="password" id="password" name="password" placeholder="password">
                            <div id="passwordError" class="text-red-500 hidden">Password must be at least 8 characters long</div>
                        </div>
                            
                                
                                <div class="">
                                    <button id="registerButton" class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">register now</button>
                                    
                                </div>
                    </form>
                    <p class="mt-8"> Do u have an account? <span class="cursor-pointer text-sm text-blue-600"><a href="{{ route('login') }}">Join us</a> </span></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registerButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var password = document.getElementById('password').value.trim();
            var isValid = true;

            // Validate name
            if (name === '') {
                document.getElementById('nameError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('nameError').classList.add('hidden');
            }

            // Validate email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('emailError').classList.add('hidden');
            }

            // Validate password
            if (password.length < 8) {
                document.getElementById('passwordError').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('passwordError').classList.add('hidden');
            }

            // If all fields are valid, submit the form
            if (isValid) {
                document.getElementById('registrationForm').submit();
            }
        });
    </script>
</body>
</html>
