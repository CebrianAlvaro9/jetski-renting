@extends('layouts.guest')

@section('content')

<section class="bg-white py-3 mt-3">
    <div  class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Elige una </span>moto de agua</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Estan son nuestras motos de agua disponibles para esta fecha y hora </p>
        </div>

        <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10">
        <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Disponibles:</h3>
        
        <form method="POST" action="{{ route('seleccion-moto') }}">
            @csrf
             @method("PUT")
        <ul class="grid w-full gap-6 md:grid-cols-3">
            @foreach ($motoslibres as $moto)
            <li>
                <input class="hidden peer" type="radio" name="moto_seleccionada" id="{{ $moto->id }}" value="{{ $moto->id }}" @if($loop->first) checked @endif>
               
                <label for="{{ $moto->id }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                    <div class="block">
                        
                       
                        <div class="w-full text-lg font-semibold inline-flex">
                            <img class="w-12" src="images/jet ski.png" alt="">
                            <span class="ml-2">{{ $moto->brand }}, {{ $moto->model }}</span>
                        </div>
                        <div class="w-full text-sm">     Con {{ $moto->horse_power}} CV, del año {{$moto->year}} .</div>
                        <div class="mt-5 text-3xl inline-flex items-center  font-semibold text-gray-900 dark:text-white">
                            {{$moto->price}} €
                        </div>
                    </div>
                </label>
            </li>
            @endforeach
           
        </ul>
        <div class="mt-6 p-4 flex ">
            <button type="submit"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
        </div>
    
        </form>
    </div>
        
    

</div>
</div>
</div>

</section>

@endsection
