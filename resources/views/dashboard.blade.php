@extends('layouts.guest')

@section('content')
   
    <div class="my-20  container mx-auto px-4 ">
        <div class="w-full">
            <div class="container mx-auto">
                <div class="py-6">
                    <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">¡Bienvenido/a
                            {{ Auth::user()->name }}</h1>

                    @if (Auth::user()->is_admin)
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 mb-10">Aquí puedes acceder a
                        varias funciones para disfrutar al máximo de tu experiencia.</p>


                    <div class="grid grid-cols-2 gap-2">
                        <a href="/admin/users"
                            class="block min-w-full max-w-sm p-6 bg-indigo-50 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Usuarios</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Explora todos los usuarios</p>
                        </a>

                        <a href="/admin/jetskisUsers"
                        
                            class="block min-w-full max-w-sm p-6 bg-indigo-100  border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Reservas
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Explora todas las reservas</p>
                        </a>

                        <a href="/admin/jetskis"
                            class="block min-w-full max-w-sm p-6 bg-indigo-100 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Motos de agua</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Gestionalas </p>
                        </a>

                        <a href="/admin/cancellations"
                            class="block  min-w-full max-w-sm p-6 bg-indigo-50 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cancelaciones</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Revisa las cancelaciones para realizar rembolsos</p>
                        </a>
                    </div>
                    @else
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 mb-10">Aquí puedes acceder a
                        varias funciones para disfrutar al máximo de tu experiencia.</p>


                    <div class="grid grid-cols-2 gap-2">
                        <a href="/welcome"
                            class="block min-w-full max-w-sm p-6 bg-indigo-50 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Explorar Motos
                                de Agua</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Encuentra la moto perfecta para ti</p>
                        </a>

                        <a href="{{ route('client.users.show', ['user' => Auth::user()->id]) }}"
                        
                            class="block min-w-full max-w-sm p-6 bg-indigo-100  border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mis Reservas
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Administra tus reservas y eventos</p>
                        </a>

                        <a href="{{ route('profile.edit') }}"
                            class="block min-w-full max-w-sm p-6 bg-indigo-100 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gestiona tu
                                perfil</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Cambia tu información de inicio de
                                sesión</p>
                        </a>

                        <a href="#"
                            class="block  min-w-full max-w-sm p-6 bg-indigo-50 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Soporte</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">Obtén ayuda y asistencia técnica</p>
                        </a>
                    </div>
                    @endif
                  

                </div>
            </div>
        </div>
    </div>
@endsection
