@extends('layouts.guest')

@section('content')

<x-admin-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    {{-- <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="" alt="img" />
                    </div> --}}
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Comprobar disponibilidad</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    </div>
                            </div>

                            {{-- <form method="POST" action="{{ route('reservations.store.step.one') }}"> --}}
                            <form method="POST" action="{{ route('admin.jetskisUsers.update',['jetskisUser'=>$jetskisUser->id]) }}">
                                @csrf
                                @method("PUT")
                                    <p>{{$jetskisUser->id}}</p>
                                <div class="sm:col-span-6">
                                    <label for="res_date" class="block text-sm font-medium text-gray-700"> 
                                    </label>
                                    <div class="mt-1">
                                        <label for="hora">Fecha:</label><br>
                                        <input type=date name="fecha" > <br>
                              
                                        <label for="hora">Hora:</label>
                                        <select id="hora" name="hora">
                                          <option value="">Seleccione una hora</option>
                                          @foreach ( $horario as $horas )
                                          <option value="{{$horas}}">{{$horas}}:00</option>   
                                          @endforeach
                                         
                                          <!-- Agrega las horas disponibles aquí -->
                                        </select>
                                        
                                    </div>
                                    <span class="text-xs"></span>
                                    @error('fecha')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                    @error('hora')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="mt-6 p-4 flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>
@endsection