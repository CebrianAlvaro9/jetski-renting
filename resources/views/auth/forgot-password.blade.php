@extends('layouts.guest')
    <!-- Session Status -->
    @section('content')
    <section style="background-image:url('{{ asset('images/login.jpg') }}')" class="bg-center bg-no-repeat bg-gray-200 bg-blend-multiply py-3 items-center justify-center xl:mb-40 mt-3 xl:h-96">
        <div  class="flex justify-center max-w-screen-xl mx-auto  px-4 sm:px-6 lg:px-8  ">
    <div class="mt-4 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
      
    <div class=" mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Has olvidado tu contraseña? Dejanos tu correo para poder enviarte la información para pioder recuperarla') }}
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

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

</div>
</div>
</div>
    </section>
@endsection
