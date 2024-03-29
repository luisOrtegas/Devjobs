<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu password? coloca tu email de registtro y enviaremos un enlace para que puedas crear uno nuevo') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex justify-between my-4">
                <x-link :href="route('login')">
                    Iniciar Session
                </x-link>  
                
                <x-link :href="route('register')">
                 Crear Cuenta
                </x-link> 
            </div>

            <x-primary-button class="w-full justify-center">
                {{ __('Enviar Instrucciones') }}
            </x-primary-butto> 
        </form>
    </x-auth-card>
</x-guest-layout>
