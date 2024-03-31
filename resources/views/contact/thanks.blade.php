@auth
                        <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth