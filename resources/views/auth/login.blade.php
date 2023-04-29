@extends('layouts.guest')
    <!-- Session Status -->
    @section('content')

    
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section style="background-image:url('{{ asset('images/login.jpg') }}')" class="bg-center bg-no-repeat bg-gray-200 bg-blend-multiply py-3 items-center justify-center xl:mb-40 mt-3">
        <div  class="flex justify-center max-w-screen-xl mx-auto  px-4 sm:px-6 lg:px-8  ">
    <div class=" w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
      
          <form class="space-y- mb-3" method="POST" action="{{ route('login') }}">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-2">Inicia sesión</h5>
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
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Si todavia no eres miembro unete aqui: <br><a  href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Crear cuenta</a>
        </div>


     
    </div>
</div>
</div>
@endsection