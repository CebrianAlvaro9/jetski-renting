@extends('layouts.guest')

@section('content')

<x-admin-layout>
    <section class="bg-white py-3 mt-3">
        <div  class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
            <div class="text-center">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Cambiar </span>reserva</h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Te mostrara la disponibilidad de la moto que seleccionaste</p>
            </div>
                    
            <div  class="flex justify-center max-w-screen-xl mx-auto  px-4 sm:px-6 lg:px-8 mt-5 xl:mb-20 xl:mt-10 ">
                <div class=" w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div id="mod">                         
    
        {{-- <form method="POST" action="{{ route('reservations.store.step.one') }}"> --}}
        <form  id="cambio" method="POST" action="{{ route('admin.jetskisUsers.update',['jetskisUser'=>$jetskisUser->id]) }}">
            @csrf
            @method("PUT")
      
            <div class="sm:col-span-6">
                                      
                <div class="relative max-w-sm">
                    
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="fecha"datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Elige una fecha">
                  </div>
                <label for="res_date" class="block text-sm font-medium text-gray-700"> 
                </label>
                <div class="mt-1">
                    {{-- <label for="hora">Fecha:</label><br>
                    <input type=date name="fecha" > <br>
           --}}
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="hora">Hora:</label>
                    <select id="hora" name="hora" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">Seleccione una hora</option>
                      @foreach ( $horario as $horas )
                      <option value="{{$horas}}">{{$horas}}:00</option>   
                      @endforeach
                     
                      <!-- Agrega las horas disponibles aquí -->
                    </select>
                    
                </div>
                <span class="text-xs"></span>
                @if($errors->has('fecha') || $errors->has('hora'))
                <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">No cumples los siguientes requisitos</h2>
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    @error('fecha')
                        <li class="text-sm text-red-400">{{ $message }}</li>
                    @enderror
                    @error('hora')
                        <li class="text-sm text-red-400">{{ $message }}</li>
                    @enderror
                </ul>
            @endif
            
            </div>
    
            <div class="mt-6 p-4 flex justify-center">
                <button type="submit"
                    class="px-4 py-2 bg-indigo-800 hover:bg-indigo-700 rounded-lg text-white">Cambiar reserva</button>
            </div>
        </form>
    
      
                </div>
            </div>
    
        </div>
    </div>
    
    </div>

</x-admin-layout>
@endsection