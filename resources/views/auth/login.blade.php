<x-guest-layout>
    <div class="bg-pink-100 min-h-screen flex items-center justify-center">

    <div class="flex flex-col items-center justify-center min-h-screen space-y-6">
    <!-- Logo Aplikasi -->
    <div class="logo-container">
    <div class="mb-6">
        <a href="{{ Auth::check() ? url('/dashboard') : url('/login') }}">
            <img src="{{ asset('images/logo.png') }}" alt="GlowGenius Logo">
        </a>
        </div>
    </div>
    </div>
            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}" class="bg-white shadow-lg rounded-lg px-8 pt-6 pb-8 w-full max-w-sm">
                @csrf
                <p class="text-center text-gray-600 mb-4">
                    Don't you have an account? 
                    <a href="{{ route('register') }}" class="text-pink-500 font-semibold underline">Sign up here</a>
                </p>
                
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" 
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" />
                    @error('email')
                        <p class="text-pink-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input id="password" type="password" name="password" required autofocus
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" />
                    @error('password')
                        <p class="text-pink-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" 
                               class="rounded border-pink-300 text-pink-500 shadow-sm focus:ring focus:ring-pink-200">
                        <span class="ml-2 text-gray-600 text-sm">Remember me</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-pink-500 hover:underline">
                            Forgot your password?
                        </a>
                    @endif

                    <button type="submit" class="bg-pink-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-opacity-50">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>