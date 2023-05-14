@extends('layouts.guest')

@section('content')
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section style="background-image:url('{{ asset('images/jetskiCreate.jpeg') }}')"  class="bg-center bg-no-repeat bg-gray-200 bg-blend-multiply py-3 items-center justify-center  mt-3">
        <div  class="flex justify-center max-w-screen-xl mx-auto  px-4 sm:px-6 lg:px-8  ">
            <div class=" w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  
       

                    <form method="POST" action="{{ route('admin.jetskis.update', $jetski->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h5 class="text-xl font-medium text-indigo-900 dark:text-white mb-2">Edita la moto de agua</h5>
                        <div class="sm:col-span-6">
                            <label for="brand" class="block text-sm font-medium text-gray-700"> Marca</label>
                            <div class="mt-1">
                                <input type="text" id="brand" name="brand" value="{{ $jetski->brand }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('brand')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="model" class="block text-sm font-medium text-gray-700"> Modelo</label>
                            <div class="mt-1">
                                <input type="text" id="model" name="model" value="{{ $jetski->model }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('model')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="horse_power" class="block text-sm font-medium text-gray-700"> CV</label>
                            <div class="mt-1">
                                <input type="text" id="horse_power" name="horse_power" value="{{ $jetski->horse_power }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('horse_power')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="year" class="block text-sm font-medium text-gray-700"> Año</label>
                            <div class="mt-1">
                                <input type="text" id="year" name="year" value="{{ $jetski->year }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('year')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700"> Precio hora</label>
                            <div class="mt-1">
                                <input type="text" id="price" name="price" value="{{ $jetski->price }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('price')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700"> Precio hora</label>
                            <div class="mt-1">
                                <input type="text" id="price_id" name="price_id" value="{{ $jetski->price_id }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('price_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        
                       
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
            

            </div>
        </div>
    </section>
</x-admin-layout>
@endsection