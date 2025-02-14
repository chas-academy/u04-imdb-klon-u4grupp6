<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex justify-center items-center min-h-screen bg-gray-100 px-4">
        <div class="flex bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full">
            <!-- Login Form -->
            <div class="w-1/2 pr-8">
                <h2 class="text-2xl font-bold text-center mb-6">Logga In</h2>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <!-- Username -->
                    <div>
                        <x-input-label for="username" :value="__('Användarnamn')" />
                        <x-text-input id="username" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Lösenord')" />
                        <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-600 shadow-sm focus:ring-yellow-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Kom ihåg mig') }}</span>
                        </label>
                    </div>
                    
                    <div class="flex flex-col items-center justify-center mt-6">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Glömt ditt lösenord?') }}
                            </a>
                        @endif
                    
                        <button class="mt-3 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md">
                            {{ __('Logga in') }}
                        </button>
                    
                        <a href="{{ route('register') }}" class="mt-3 w-full text-center bg-yellow-300 hover:bg-yellow-400 text-gray-800 font-bold py-2 px-4 rounded-md">
                            {{ __('Skapa konto') }}
                        </a>
                    </div>
                </form>
            </div>
            
            <!-- Side Information -->
            <div class="w-1/2 border-l pl-8">
                <h3 class="text-xl font-bold">Varför du ska skaffa ett CHAs konto</h3>
                <ul class="mt-4 text-gray-600">
                    <li class="mb-2"><strong>Skapa egen titellista</strong><br>Du kan skapa en lista med filmer och serier som du vill titta på</li>
                    <li><strong>Lämna reviews</strong><br>Du kan lämna reviews på filmer och serier för andra att läsa</li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
