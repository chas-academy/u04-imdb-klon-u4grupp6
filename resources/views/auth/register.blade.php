<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-center text-xl font-bold mb-4">Skapa Konto</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Ditt Namn')" />
                    <x-text-input id="name" class="block mt-1 w-full border rounded p-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('E-post')" />
                    <x-text-input id="email" class="block mt-1 w-full border rounded p-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Lösenord')" />
                    <x-text-input id="password" class="block mt-1 w-full border rounded p-2" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Upprepa Lösenord')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border rounded p-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded">
                        {{ __('Skapa konto') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
