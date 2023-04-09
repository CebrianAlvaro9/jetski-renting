

@extends('layouts.guest')

@section('content')

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
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Cambiar reserva</h3>
<div id="mod">                          <p>Te mostrara la disponibilidad de la moto que seleccionaste</p>

    {{-- <form method="POST" action="{{ route('reservations.store.step.one') }}"> --}}
    <form  id="cambio" method="POST" action="{{ route('client.jetskisUsers.update',['jetskisUser'=>$jetskisUser->id]) }}">
        @csrf
        @method("PUT")
  
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

    <h3 class="mb-4 text-xl font-bold text-blue-600">En el caso de que se quiera cancelar </h3>
    @error('reason')
    <div class="text-sm text-red-400">{{ $message }}</div>
@enderror
    <div class="mt-6 p-4 flex justify-end">
        <button id="botoncancel"type="submit"
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Eliminar</button>
    </div>
</div>


                   <div id="cancel">

                    <h3 class="mb-4 text-xl font-bold text-blue-600">Cancelar</h3>
                    <p>En el caso de querer eliminar la reserva comentanos la razon y acepta las condiciones</p>
                    <form  method="POST" action="{{ route('cancel',['id'=>$jetskisUser->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="sm:col-span-6">
                            <label for="brand" class="block text-sm font-medium text-gray-700"> Razon</label>
                            <div class="mt-1">
                                <input type="text" id="reason" name="reason" 
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>

                            @error('reason')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                          
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aceptas las condiciones</label>
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit" id="anula"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Anular el alquiler</button>
                        </div>
                    </form>
                    <div class="mt-6 p-4">
                        <button id="atras"type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">atras</button>
                    </div>   
                    </div>   
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>

        const cancelarForm = document.querySelector('#cancel');
        const modForm = document.querySelector('#mod');
        document.getElementById("botoncancel").addEventListener("click", function() {
            cancelarForm.style.display = 'contents';
            modForm.style.display = 'none';
  
});

document.getElementById("atras").addEventListener("click", function() {
            cancelarForm.style.display = 'none';
            modForm.style.display = 'contents';
  
});
    </script>

    <style>
        #cancel{
            display: none;
        }
    </style>
@endsection
