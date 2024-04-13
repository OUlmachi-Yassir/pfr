<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('check') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    
</x-guest-layout>
<!-- component -->
<!-- Create By Joker Banny -->
<div class="min-h-screen bg-no-repeat bg-cover bg-center"
	style="background-image: url('https://images.unsplash.com/photo-1486520299386-6d106b22014b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
	<div class="flex justify-end">
		<div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
			<div>

				<form method="POST" action="{{ route('check') }}">
					<div>
						<span class="text-sm text-gray-900">Welcome back</span>
						<h1 class="text-2xl font-bold">Login to your account</h1>
					</div>
					<div class="mt-5">
						<label class="block text-md mb-2" for="password">Password</label>
						<input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="password" name="password" placeholder="password">
        </div>
						<div class="my-3">
							<label class="block text-md mb-2" for="email">Email</label>
							<input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" name="password" placeholder="email">
        </div>
							<div class="flex justify-between">
								<div>
									<input class="cursor-pointer"  type="radio" name="rememberme">
									<span class="text-sm">Remember Me</span>
								</div>
								<span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
							</div>
							<div class="">
								<button class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">Login now</button>
								<div class="flex  space-x-2 justify-center items-end bg-gray-700 hover:bg-gray-600 text-white py-2 rounded-md transition duration-100"">

            <img class=" h-5 cursor-pointer" src="https://i.imgur.com/arC60SB.png" alt="">
									<button >Or sign-in with google</button>
								</div>
							</div>
				</form>
				<p class="mt-8"> Dont have an account? <span class="cursor-pointer text-sm text-blue-600"> Join free today</span></p>
			</div>
		</div>
	</div>
</div>
</div>
