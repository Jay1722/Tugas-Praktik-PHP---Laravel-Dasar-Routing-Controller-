<x-guest-layout>
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow mt-16">
        <h2 class="text-2xl font-bold text-center mb-6 text-blue-600">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <a class="text-sm text-blue-600 hover:underline" href="{{ route('register') }}">
                    {{ __('Belum punya akun? Daftar') }}
                </a>
                <x-primary-button class="ml-3">
                    {{ __('Masuk') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
